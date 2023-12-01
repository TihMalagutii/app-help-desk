<?php

    $isAuth = false;

    $users = [
        [
            "email" => "adm@adm.com",
            "password" => "123"
        ],
        [
            "email" => "user@user.com",
            "password" => "123"
        ]
    ];

    $email = $_POST["email"];
    $password = $_POST["password"];

    foreach($users as $user) {
        if($user["email"] == $email && $user["password"] == $password) {
            $isAuth = true;
        }
    }

    if($isAuth) {
        header("Location: ../home.php");
    } else {
        header("Location: ../index.php?login=error");
    }


?>