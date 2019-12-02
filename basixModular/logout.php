<?php

session_start();

if (isset($_POST['logout'])){
        $_SESSION['loggedIn'] = false;
        session_destroy();
    header('Location:home.php');
    }
print_r($_SERVER);
?>
