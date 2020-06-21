<?php 

require 'partials/Header.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/category.css">
    <title>Categorie</title>
</head>
<body>
    <section>
        <div class="title"><h2><?= $category['name']?></h2></div>
        <div class="category">
        <?php foreach($products as $product): ?>
            <div class="products">
                <a href="index.php?p=product&product_id=<?= $product['id'] ?>">
                <img src="assets/images/<?= $product['firstImage'] ?>" style="width: 240px; height: 250px;" alt="<?= $product['name'] ?>">
                <br><H3><?= $product['name'] ?></H3></a>
                <p class="price"><?= $product['price'] ?>€</p>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
</body>
</html>


