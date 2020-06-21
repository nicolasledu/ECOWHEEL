<?php

require_once 'models/Login.php';
require_once 'models/Category.php';

$selectedCategories = getCategories();


if (isset($_GET['action']) && $_GET['action'] == 'disconnect'){
    unset($_SESSION['user']);
    session_destroy();
    header('Location:index.php');
}
if(!empty($_POST)){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo'Une Erreur est survenue !';
    }
    else{
        $user = userVerif($_POST['email'],$_POST['password']);
        if($user != false){
            $_SESSION['user'] = $user;    
        }
        else{
            echo'Non valide';
        }
    }

}?>

<?php include 'views/login.php';?>