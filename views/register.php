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
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        <label for="email">email *:</label>
        <input id="email" type="email" name="email" required><br>

        <label for="password">Mot de passe *:</label>
        <input id="password" type="password" name="password" required><br>

        <label for="first_name">Prénom *:</label>
        <input id="first_name" type="text" name="first_name" required><br>

        <label for="last_name">Nom de Famille *:</label>
        <input id="last_name" type="text" name="last_name" required><br>

        <label for="address">Adresse *:</label>
        <input id="laddress" type="text" name="address" required><br>

        <button type="submit"> envoyer</button>
        <small>* champs obligatoires</small>
    </form>
</body>
</html>