<?php

session_start();
session_name("user");
$user = $_POST['username'];
$pass = $_POST['password'];
$passTwo = $_POST['psw2'];

    //CHECK IF THE FIELDS ARE FILLED
if (!empty($user) && !empty($pass) && !empty($_POST['psw2']) && passMatch($pass,$passTwo) ){

    require "../dbConnect.inc"; //to encrypt
    // $options = ['salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];

    $stmt = $mysqli->prepare("INSERT INTO LoginForm (user,password) VALUES (?,?) ");
    $stmt->bind_param("ss",$user,password_hash($pass, PASSWORD_DEFAULT));
    // hashes the password and prepares the sql statement
    $stmt->execute();
    $stmt->close();

    $_SESSION['user'] = $user; // add user to session array
    $_SESSION['loggedIn'] = true;
    header('location:../profile/home.php');

}
else{
     header("location:../home/home.php");
}

function passMatch($str1,$str2){

    if (strcmp($str1, $str2) == 0) {
        return true;

    }
    else
        return false;

}


?>
