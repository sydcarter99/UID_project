<?php
    //receive login data from login.php 

    //connect to database
    include 'dbconnect.php';

    //get data from login form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //check if email and password are in database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    //if email and password are in database, create session and pass the user id to the session and user name to the session
    if ($row['email'] == $email && $row['password'] == $password) {
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
    } else {
        header("Location: login.php?error=1");
    }

?>