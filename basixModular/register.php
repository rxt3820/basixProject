<?php

session_start();

    //CHECK IF THE FIELDS ARE FILLED
if (isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['psw2']) && passMatch($_POST['psw'],$_POST['psw2']) ){

    $path = './';
    require $path."../../../dbConnect.inc";
    // $options = ['salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];

    $stmt = $mysqli->prepare("INSERT INTO LoginForm (user,password) VALUES (?,?) ");
    $stmt->bind_param("ss",$_POST['uname'],password_hash($_POST['psw'], PASSWORD_DEFAULT)); // hashes the password and prepares the sql statement
    $stmt->execute();
    $stmt->close();

    $_SESSION['user'] = $_POST['uname']; // to say welcome 'user'
    header('location:welcome.php');
}

function passMatch($str1,$str2){

    if (strcmp($str1, $str2) == 0) {
        return true;
//
    }
    else
        return false;


}





?>
