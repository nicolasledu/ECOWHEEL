<?php

function userVerif($email, $password){

    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
    $query->execute(
        [
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
        ]
    );

    $user = $query->fetch();

    return $user;
}
