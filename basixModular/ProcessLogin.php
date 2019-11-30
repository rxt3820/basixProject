<?php

// This checks if the user exists or not
require "../dbConnect.inc";

session_start();

$user = trim($_POST['username']);
$_SESSION['loggedIn'] = false;

if ($mysqli) {
    if (isset($user) && isset($_POST['psw'])) {
    $pass = $_POST['password'];

    $query = 'SELECT * FROM LoginForm where user = "'.$user.'" AND password = "'.$pass.'"';
    echo $query; 

    $result = mysqli_query($mysqli,$query);
    if (mysqli_fetch_assoc($result)) {


        $_SESSION['user'] = $_POST['username'];
        $_SESSION['loggedIn'] = true;
        header('location:header2.html');
    }
    else{
        header('location:../header.html');
    }

    }
 }

?>
