<?php 

function viewCart($productId){

    
$db = dbConnect();

$query = $db->prepare('SELECT * FROM products WHERE id= ?');

$result = $query->execute([
    $productId
]);

$viewProduct = $query->fetchAll();


return $viewProduct;
}
