<?php

require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/Login.php';
require_once 'models/Register.php';



$products = getProducts();
$selectedCategories = getCategories();

include 'views/user.php';