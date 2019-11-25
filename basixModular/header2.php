<?php
session_start();
if ($_SESSION['loggedIn']) {

    echo "Welcome ". $_SESSION['user']. "<br>" ;
    echo "<a href = 'logout.php'>Logout</a>";

}
else{

        header('location: header.html');
}


?>
