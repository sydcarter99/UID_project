<?php
    //receive login data from login.php 

    //connect to database

    //get data from login form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //check if email and password are in database

    //if email and password are in database, create session and pass the user id to the session and user name to the session
    if ("test" == $email && "test" == $password) {
        session_start();
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = "test user";
        $_SESSION['logged_in'] = true;

        header("Location: ../src/index.php");

        exit();
    } else {
        header("Location: ../src/login.php?error=1");
    }

?>