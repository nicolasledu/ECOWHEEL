<?php 

require 'partials/Header.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/loginRegister.css">
    <title>account</title>
</head>
<body>
    <?php if(!isset($_SESSION['user'])):?>
    <div class="account">
        <div class="acountbtn">
        <div class="register">
            <a href="index.php?p=register" class="btnRegister">S'enregistrer</a><br>
        </div>

        <div class="login">
            <a href="index.php?p=login" class="btnConnect">Se connecter</a><br></i></a>
        </div>
        </div>
    </div>
        
    <?php else:?>
            <h1 class="user">Bonjour <?= $_SESSION['user']['first_name']?> <?= $_SESSION['user']['last_name']?></h1><br>
        <?php if(isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 1):?>
    <div class="btn">
        <div class="userPanel">
            <div class="admin">
                <a href="admin/index.php" class="btnAdmin">Administration</a><br>
            </div>
        <?php endif;?>
        </div>
    </div>
    <div class="btn">
        <div class="userPanel">
            <div class="profile">
                <a href="index.php?p=profile&action=edit" class="btnProfile">Profil</a><br>
            </div>
        </div>
        <div class="userPanel1">
            <div class="order">
                <a href="index.php?p=commandes" class="btnOrder">Commandes</a><br>
            </div>
        </div>
        <div class="userPanel2">
            <div class="disconnect">
                <a href="index.php?p=login&action=disconnect" class="btnDisconnect">Déconnexion</a><br>
            </div>
        </div>
    </div>
 <?php endif;?>
</body>
</html>


    