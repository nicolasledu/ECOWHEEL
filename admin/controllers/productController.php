<?php 
require('models/category.php');
require('models/product.php');
$productCategories = productCategories();

if($_GET['action'] == 'list'){
	$products = getAllProducts();
	require('views/productList.php');
}

elseif($_GET['action'] == 'new'){
    $categories = getAllCategories();
	require('views/productForm.php');
}

elseif($_GET['action'] == 'add'){
	
	if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['short_description']) || empty($_POST['price'])){
		
		if(empty($_POST['name'])){
			$_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
        }
		if(empty($_POST['description'])){
            $_SESSION['messages'][] = 'Le champ description est obligatoire !';
		}
		if(empty($_POST['price'])){
            $_SESSION['messages'][] = 'Le champ du prix est obligatoire !';
        }
		$_SESSION['old_inputs'] = $_POST;
		header('Location:index.php?controller=songs&action=new');
		exit;
	}
	else{
		$resultAdd = addProduct($_POST);
		
		$_SESSION['messages'][] = $resultAdd ? 'Produit enregistré !' : "Erreur lors de l'enregistrement du Produit... :(";
		
		header('Location:index.php?controller=product&action=list');
		exit;
	}
}

elseif($_GET['action'] == 'delete'){
	if(isset($_GET['id'])){
		$result = deleteProduct($_GET['id']);
	}
	else{
		header('Location:index.php?controller=product&action=list');
		exit;
	}

	$_SESSION['messages'][] = $result ? 'Produit supprimée !' : 'Erreur lors de la suppression du Produit... :(';
	
	header('Location:index.php?controller=product&action=list');
	exit;
}

elseif($_GET['action'] == 'edit'){
    $categories = getAllCategories();
	if(!empty($_POST)){
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['short_description']) || empty($_POST['price'])){
		
			if(empty($_POST['name'])){
				$_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
			}
			if(empty($_POST['description'])){
				$_SESSION['messages'][] = 'Le champ description est obligatoire !';
			}
			if(empty($_POST['price'])){
				$_SESSION['messages'][] = 'Le champ du prix est obligatoire !';
			}
            
			$_SESSION['old_inputs'] = $_POST;
			header('Location:index.php?controller=product&action=edit&id=' . $_GET['id']);
			exit;
		}
		else{
			$result = updateProduct($_GET['id'], $_POST);
			$_SESSION['messages'][] = $result ? 'Produit mise à jour !' : 'Erreur lors de la mise à jour du Produit... :(';
			header('Location:index.php?controller=product&action=list');
			exit;
		}
	}
	else{
		if(!isset($_SESSION['old_inputs'])){
			if(isset($_GET['id'])){
				$product = getProduct($_GET['id']);
				if($product == false){
					header('Location:index.php?controller=product&action=list');
					exit;
				}
			}
			else{
				header('Location:index.php?controller=product&action=list');
				exit;
			}
        }
        $products = getAllProducts();
		require('views/productForm.php');
	}

}