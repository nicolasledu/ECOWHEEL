<?php

require_once 'models/Category.php';
require_once 'models/Product.php';

$products = getProducts();
$selectedCategories = getCategories();

include 'views/index.php';
