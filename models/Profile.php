<?php 

function getProfile($id)
{
	$db = dbConnect();
	
	$query = $db->prepare("SELECT * FROM user WHERE id = ?");
	$query->execute([
		$id
	]);
	
	$result = $query->fetch();
	
	return $result;
}

function updateProfile($id, $informations)
{
	$db = dbConnect();
	
	$query = $db->prepare('UPDATE user SET first_name = ? , last_name = ? , email = ? , password = ? , address = ? WHERE id = ?');
	
	$result = $query->execute(
		[
            $informations['first_name'],
            $informations['last_name'],
            $informations['email'],
            $informations['password'],
            $informations['address'],
			$id,
		]
	);
	
	return $result;
}