<?php

// This checks if the user exists or not
$path = './';
require $path."../../../dbConnect.inc";

session_start();
$user = trim($_POST['uname']);

if ($mysqli) {
    if (isset($user) && isset($_POST['psw'])) {
    $pass = $_POST['psw'];

    $query = 'SELECT * FROM LoginForm where user = "'.$_POST['uname'].'" AND password = "'.$_POST['psw'].'"';

    $result = mysqli_query($mysqli,$query);
    if (mysqli_fetch_assoc($result)) {


        $_SESSION['user'] = $_POST['uname'];
        $_SESSION['logged in'] = true;
        header('location:header2.php');
    }
    else{
        header('location:header.html');
    }

    }
 }

?>
