<?php

require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/Login.php';
require_once 'models/Register.php';
require_once 'models/Profile.php';



$products = getProducts();
$selectedCategories = getCategories();


if($_GET['action'] == 'edit'){
	
	if(!empty($_POST)){
		if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['address'])){
		
			if(empty($_POST['first_name'])){
				$_SESSION['messages'][] = 'Le champ Prenom est obligatoire !';
            }
            if(empty($_POST['last_name'])){
				$_SESSION['messages'][] = 'Le champ Nom est obligatoire !';
            }
            if(empty($_POST['email'])){
				$_SESSION['messages'][] = 'Le champ Email est obligatoire !';
            }
            if(empty($_POST['password'])){
				$_SESSION['messages'][] = 'Le champ Mot de Passe est obligatoire !';
            }
            if(empty($_POST['address'])){
				$_SESSION['messages'][] = 'Le champ Adresse est obligatoire !';
			}
		
			$_SESSION['old_inputs'] = $_SESSION['user'];
			header('Location:index.php?p=profile&action=edit&id=' . $_GET['id']);
			exit;
		}
		else{
			$result = updateProfile($_GET['id'], $_POST);
			$_SESSION['messages'][] = $result ? 'Profile mis à jour !' : "Erreur lors de la mise à jour du Profile ... :(";
			header('Location:index.php?p=profile&action=list');
			exit;
		}
	}
	else{
		if(!isset($_SESSION['old_inputs'])){
			if(isset($_GET['id'])){
				$user = getProfile($_GET['id']);
				if($user == false){
					header('Location:index.php?p=profile&action=list');
					exit;
				}
			}
			else{
				header('Location:index.php?p=profile&action=list');
				exit;
			}
		}
		require('views/profile.php');
	}

}

include 'views/profile.php';