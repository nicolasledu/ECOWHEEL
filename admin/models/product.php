<?php

function getAllProducts()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
	$products =  $query->fetchAll();

    return $products;
}

function getProduct($id)
{
	$db = dbConnect();
	
	$query = $db->prepare("SELECT * FROM products WHERE id = ?");
	$query->execute([
		$id
	]);
	
	$result = $query->fetch();
	
	return $result;
}

function updateProduct($id, $informations)
{
	$db = dbConnect();
	
	$query = $db->prepare('UPDATE products SET name = ?, description = ?, short_description = ?, price = ? WHERE id = ?');
	
	$result = $query->execute(
		[
            $informations['name'],
            $informations['description'],
			$informations['short_description'],
			$informations['price'],
			$id,
		]
	);

	$query = $db->prepare('UPDATE products_categories SET product_id = ?, category_id = ? WHERE product_id = ?');
	
	$result = $query->execute(
		[
            $id,
            $informations['category_id'],
			$id,
		]
	);
	
	return $result;
}

function deleteProduct($id)
{
	$db = dbConnect();
	
	
	$query = $db->prepare('DELETE FROM products WHERE id = ?');
	$result = $query->execute([$id]);
	
	return $result;
}

function addProduct($informations)
{
	$db = dbConnect();
	
	$query = $db->prepare("INSERT INTO products (name, description, short_description, price) VALUES( :name, :description, :short_description, :price )");
	$result = $query->execute([
        'name' => $informations['name'],
        'description' => $informations['description'],
		'short_description' => $informations['short_description'],
		'price' => $informations['price'],
	]);

	$productId = $db->lastInsertId();
	$query = $db->prepare("INSERT INTO products_categories (product_id, category_id) VALUES( :product_id, :category_id)");
	$result = $query->execute([
		'product_id' => $productId,
		'category_id' => $informations['category_id'],
	]);

	return $result;
}

function productCategories(){
	
	$db = dbConnect();

    $query = $db->query('SELECT * FROM products_categories');
	$productCategories =  $query->fetchAll();

    return $productCategories;
}