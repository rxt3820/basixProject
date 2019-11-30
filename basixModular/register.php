<?php

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

    //CHECK IF THE FIELDS ARE FILLED
if (isset($user) && isset($pass) && isset($_POST['psw2']) && passMatch($_POST['password'],$_POST['password']) ){

    require "../dbConnect.inc"; //to encrypt
    // $options = ['salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];

    $stmt = $mysqli->prepare("INSERT INTO LoginForm (user,password) VALUES (?,?) ");
  $stmt->bind_param("ss",$user,password_hash($pass, PASSWORD_DEFAULT));
    // hashes the password and prepares the sql statement
  $stmt->execute();
  $stmt->close();

    $_SESSION['user'] = $user; // to say welcome 'user'*/
    header('location:header2.html');
}
else{
     header("location:../header.html");
}

function passMatch($str1,$str2){

    if (strcmp($str1, $str2) == 0) {
        return true;

    }
    else
        return false;

}


?>
