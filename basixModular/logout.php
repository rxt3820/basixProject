<?php

session_start();

if (isset($_POST['logout'])){
        $_SESSION['loggedIn'] = false;
        session_destroy();
    header('Location:../home/home.php');
     exit();
    }
?>
