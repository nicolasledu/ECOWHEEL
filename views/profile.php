
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
    <title>Profile</title>
</head>
<body>
    <form action="index.php?p=profile&action=edit" method="post">
        <label for="email">email *:</label>
        <input id="email" type="email" name="email" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['mail'] : '' ?><?= isset($user) ? $user['email'] : '' ?>" required><br>

        <label for="password">Mot de passe *:</label>
        <input id="password" type="password" name="password" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['password'] : '' ?><?= isset($user) ? $user['password'] : '' ?>" required><br>

        <label for="first_name">Prénom *:</label>
        <input id="first_name" type="text" name="first_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['first_name'] : '' ?><?= isset($user) ? $user['first_name'] : '' ?>" required><br>

        <label for="last_name">Nom de Famille *:</label>
        <input id="last_name" type="text" name="last_name" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['last_name'] : '' ?><?= isset($user) ? $user['last_name'] : '' ?>" required><br>

        <label for="address">Adresse *:</label>
        <input id="laddress" type="text" name="address" value="<?= isset($_SESSION['old_inputs']) ? $_SESSION['old_inputs']['address'] : '' ?><?= isset($user) ? $user['address'] : '' ?>" required><br>

        <button type="submit"> envoyer</button>
        <small>* champs obligatoires</small>
    </form>
</body>
</html>


