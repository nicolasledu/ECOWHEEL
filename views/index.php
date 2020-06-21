<?php 

require 'partials/Header.php';

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/index.css">
    
    <title>EcoWheel</title>
</head>
<body>  
<div class="carouselContainer">
    <div class="mySlides fade">
        <img src="./assets/images/pub3.jpg" style="width:100%">  
    </div>
    <div class="mySlides fade">
        <img src="./assets/images/pub.jpg" style="width:100%">    
    </div>
    <div class="mySlides fade">
        <img src="./assets/images/pub3.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="box1">
    <p>
        Lorem Ipsum is simply dummy text of the printing and 
        typesetting industry. Lorem Ipsum has been the industry’s 
        standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and 
        typesetting industry. Lorem Ipsum has been the industry’s 
        standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and 
        typesetting industry. Lorem Ipsum has been the industry’s 
        standard dummy text ever since the 1500s, 
    </p>
</div>

<div class="box2">
    <div>
        <h1 class="textCategorie">Nos Categories</h1>
        <div class="categorie">
            <?php foreach($selectedCategories as $categories):?>
            <a href="index.php?p=category&category_id=<?= $categories['id'] ?>">
            <img class="categories" src="./assets/images/<?= $categories['image'] ?>" ></a>
            <?php endforeach;?>
        </div>
    </div>
</div>

<div class="box3">
    <div class="social">
        <H2>Suivez-nous</H4>
        <div>
            <div class="fb">
                <img src="./assets/images/fb.svg" alt="Facebook" >
            </div>
            <div class="insta">
                <img src="./assets/images/fb.svg" alt="Instagram">
            </div>
            <div class="twitter">
                <img src="./assets/images/twitter.svg" alt="Twitter">   
            </div>
        </div>
    </div>

<div class="contactUs">
    <H2>Contactez-nous</H4>
    <div class="email">
        <form action="" method="post">
            <div>
                <label for="mail">E-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea class="msg" id="msg" name="user_message"></textarea>
            </div>
            <div class="validation">
                <a class="button" href="button">Envoyer</a>
            </div>
        </form>
    </div>
</div>

    <script type="text/javascript" src="./assets/js/slide.js"></script>
</body> 
</html>


