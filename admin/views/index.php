<?php require ('partials/header.php'); ?>

<?php require ('partials/menu.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>admin</title>
</head>
<body>
    <div class="admin">
    <h1>Tableau de bord</h1>
        <div class="adminPanel">
            <div class="category">
                <a href="index.php?controller=category&action=list" class="btnCategory">Gestion des Catégories</a>
            </div>
        </div><br>
        <div class="adminPanel">
            <div class="product">
                <a href="index.php?controller=product&action=list" class="btnProduct">Gestion des Produits</a>
            </div>
        </div>
    </div>
</body>
</html>



    