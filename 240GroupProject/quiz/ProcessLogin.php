<?php

// This checks if the user exists or not
require "../dbConnect.inc";

session_start();
session_name("user");

$user = $_POST['username'];
$pass = $_POST['password'];

//$_SESSION['loggedIn'] = false;

if ($mysqli) {
    if (isset($user) && isset($pass)) { //checks if there is something in the query

    $query = "SELECT password FROM LoginForm where user = '$user'";
    $res = mysqli_query($mysqli,$query);
        
    if (password_verify($_pass, $res)) {
        $_SESSION['loggedIn']=true;
        $_SESSION['user']=$user;
        header('Location: ../profile/home.php');
		}
    else{
        header('location:../home/home.php');
    }

    }
 }

?>
