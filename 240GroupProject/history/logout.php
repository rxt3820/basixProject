<?php

session_start();
session_name("user");


if (isset($_POST['logout'])){
        $_SESSION['loggedIn'] = false;
        session_destroy();
    }
?>
