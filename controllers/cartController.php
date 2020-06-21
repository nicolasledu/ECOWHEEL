<?php

require_once 'models/Cart.php';
require_once 'models/Product.php';
require_once 'models/Category.php';

$_GET['category_id'] = null;

$selectedCategories = getCategories();
$category = getCategory($_GET['category_id']);
$products = getProducts();

switch($_GET['action']){
    case 'addCart';
        $product = getproduct($_GET['product_id']);
        $_SESSION['cart'][$_GET['product_id']] = $product;
        header('Location:index.php?p=cart&action=viewCart&product_id='.$_GET['product_id']);
    break;

    case 'deleteCart';
    break;

    case 'updateCart';
    break;

    case 'listCart';
        require('views/cart.php');
    break;

    case 'viewCart';
        $cartProducts = [];
        foreach ($_SESSION['cart'] as $cart){
        $cartProducts = viewCart($product['id']);}
        header('Location:index.php?p=cart&action=viewCart&product_id='.$_GET['product_id']);
    break;

}

