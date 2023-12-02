<?php

    session_start();

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
        $_SESSION["isAuth"] = true;
        header("Location: ../home.php");
    } else {
        $_SESSION["isAuth"] = false;
        header("Location: ../index.php?login=error");
    }


?>