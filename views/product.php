<?php 

require 'partials/Header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/product.css">
    <title>Produit</title>
</head>
<body>
    <div class="container">
        <div class="product">
            <img src="assets/images/<?= $product['firstImage'] ?>" alt="<?= $product['name'] ?>" style="width: 350px;">
        </div>
        <div class="price">
            <H2><?= $product['name'] ?></H2>
            <p><?= $product['price'] ?>€</p>
            <div class="cart">
                <a class="button" href="index.php?p=cart&action=addCart&product_id=<?= $product['id'] ?>">Ajouter au panier</a>
            </div>
            <img src="assets/images/paypal.png" alt="logo paypal" style="width: 100px;">
        </div>
    </div>
    
    <div class="description">
        <H2>Description</H2>
        <p><?= $product['description'] ?></p>
        <p><?= $product['short_description'] ?></p>
    </div>

    <div class="image">
        <img src="assets/images/<?= $product['firstImage'] ?>" alt="<?= $product['name'] ?>" style="width: 400px;">
        <img src="assets/images/<?= $product['secondImage'] ?>" alt="<?= $product['name'] ?>" style="width: 400px;">
    </div>
</body>
</html>