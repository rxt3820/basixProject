<?php
session_start();
if (isset($_SESSION['user'])) {

    echo "Welcome ". $_SESSION['user']. "<br>" ;
    echo "<a href = 'logout.php'>Logout</a>";

}
else{

        header('location: header.html');
}


?>
