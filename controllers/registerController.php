<?php


require_once 'models/Register.php';
require_once 'models/Category.php';

$selectedCategories = getCategories();



if(!empty($_POST)){
    if(empty($_POST['email']) || empty($_POST['password'])){

    }
    else{
        $emailVerif = emailVerif($_POST['email']);
        if(!$emailVerif){
            register();
            header('location:index.php');
        }
        else{
            echo'email deja utilisé';
        }
    }
}

include 'views/register.php';

?>