<?php

function register(){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO user (email, password, first_name, last_name, address) VALUES (?, ?, ?, ?, ?)');
            $result = $query->execute(
                [
                    $_POST['email'],
                    hash('md5',$_POST['password']),
                    $_POST['first_name'],
                    $_POST['last_name'],
                    $_POST['address'],

                ]
            );
}


function emailVerif(){
    
    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
        $query->execute(
            [
                $_POST['email']
            ]
        );
    return $emailVerif = $query->fetch();
}