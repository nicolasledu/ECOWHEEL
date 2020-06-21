<?php 

require 'partials/Header.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/loginRegister.css">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
            <label for="email">email *:</label>
            <input id="email" type="email" name="email" required><br>

            <label for="password">Mot de passe *:</label>
            <input id="password" type="password" name="password" required><br>

            <button type="submit"> envoyer</button>
            <small>* champs obligatoires</small><br>
            <?php if(isset($_SESSION['user'])):?>
    Bienvenue <?= $_SESSION['user']['first_name']?> !
    <a href="index.php?p=user">Votre Compte</a><br>
    <?php endif; ?>
    </form>
</html>
