<?php

function getAllCategories()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
	$categories =  $query->fetchAll();

    return $categories;
}

function getCategory($id)
{
	$db = dbConnect();
	
	$query = $db->prepare("SELECT * FROM categories WHERE id = ?");
	$query->execute([
		$id
	]);
	
	$result = $query->fetch();
	
	return $result;
}

function updateCategory($id, $informations)
{
	$db = dbConnect();
	
	$query = $db->prepare('UPDATE categories SET name = ? WHERE id = ?');
	
	$result = $query->execute(
		[
			$informations['name'],
			$id,
		]
	);
	
	return $result;
}

function deleteCategory($id)
{
	$db = dbConnect();
	
	$query = $db->prepare('DELETE FROM categories WHERE id = ?');
	$result = $query->execute([$id]);
	
	return $result;
}

function addCategory($informations)
{
	$db = dbConnect();
	
	$query = $db->prepare("INSERT INTO categories (name) VALUES( :name)");
	$result = $query->execute([
		'name' => $informations['name'],
	]);

	return $result;
}