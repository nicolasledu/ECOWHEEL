<?php 
require('models/category.php');

if($_GET['action'] == 'list'){
	$categories = getAllCategories();
	require('views/categoryList.php');
}

elseif($_GET['action'] == 'new'){
	require('views/categoryForm.php');
}

elseif($_GET['action'] == 'add'){
	
	if(empty($_POST['name'])){
		
		if(empty($_POST['name'])){
			$_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
		}
		
		$_SESSION['old_inputs'] = $_POST;
		header('Location:index.php?controller=category&action=new');
		exit;
	}
	else{
		$resultAdd = addCategory($_POST);
		
		$_SESSION['messages'][] = $resultAdd ? 'La Catégorie enregistré !' : "Erreur lors de l'enregistreent de la Catégorie ... :(";
		
		header('Location:index.php?controller=category&action=list');
		exit;
	}
}

elseif($_GET['action'] == 'delete'){
	if(isset($_GET['id'])){
		$result = deleteCategory($_GET['id']);
	}
	else{
		header('Location:index.php?controller=category&action=list');
		exit;
	}

	$_SESSION['messages'][] = $result ? 'Catégorie supprimé !' : "Erreur lors de la suppression de la Catégorie ... :(";
	
	header('Location:index.php?controller=category&action=list');
	exit;
}

elseif($_GET['action'] == 'edit'){
	
	if(!empty($_POST)){
		if(empty($_POST['name'])){
		
			if(empty($_POST['name'])){
				$_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
			}
		
			$_SESSION['old_inputs'] = $_POST;
			header('Location:index.php?controller=category&action=edit&id=' . $_GET['id']);
			exit;
		}
		else{
			$result = updateCategory($_GET['id'], $_POST);
			$_SESSION['messages'][] = $result ? 'Catégorie mis à jour !' : "Erreur lors de la mise à jour de la Catégorie ... :(";
			header('Location:index.php?controller=category&action=list');
			exit;
		}
	}
	else{
		if(!isset($_SESSION['old_inputs'])){
			if(isset($_GET['id'])){
				$category = getCategory($_GET['id']);
				if($category == false){
					header('Location:index.php?controller=category&action=list');
					exit;
				}
			}
			else{
				header('Location:index.php?controller=category&action=list');
				exit;
			}
		}
		require('views/categoryForm.php');
	}

}