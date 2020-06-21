<?php
function getCategories($productId = false){

    
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM categories');

    $result = $query->execute();

    $selectedCategories = $query->fetchAll();

  
  return $selectedCategories;
}



function getCategory($id){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM categories WHERE id = ?');

    $result = $query->execute( [$id] );

    if($result){
        return $category = $query-> fetch();
    }

    else{
        return false;
    }

}

