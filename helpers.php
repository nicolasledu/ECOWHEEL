<?php

function dbConnect()
{
  try{
		$db = new PDO('mysql:host=localhost;dbname=Eshop;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $exception) 
	{
		die( 'Erreur : ' . $exception->getMessage() );
	}

  return $db;
}
