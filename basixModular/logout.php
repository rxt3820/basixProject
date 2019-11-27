<?php

session_start();

if (isset($_GET['logout']))
    $_SESSION['loggedIn'] = false;
    session_destroy();
header('location: header.html')

?>
