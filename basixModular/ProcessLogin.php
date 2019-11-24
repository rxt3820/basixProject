<?php

// This checks if the user exists or not
$path = './';
require $path."../../../dbConnect.inc";

session_start();

if ($mysqli) {
    if (isset($_POST['uname']) && isset($_POST['psw'])) {
    $user = $_POST['uname'];
    $pass = $_POST['psw'];

    $query = 'SELECT * FROM LoginForm where user = "'.$_POST['uname'].'" AND password = "'.$_POST['psw'].'"';

    $result = mysqli_query($mysqli,$query);
    if (mysqli_fetch_assoc($result)) {


        $_SESSION['user'] = $_POST['uname'];
        header('location:welcome.php');
    }
    else{
        header('location:header.html');
    }

    }
 }

?>
