<?php
session_name("user");
?>

<?php
$_SESSION["loggedIn"] = null;
 if($_SESSION['loggedIn']){
    require('../header.html');
}
else{
require('../header2.html');
}
?>
	

<?php
        $page = 'profile';
		 require '../dbConnect.inc';  
		$sql = "SELECT content FROM home where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo "0 results";
		}
	?>

	<?php
        $page = 'profile';
		 require '../dbConnect.inc';  
		$sql = "SELECT internalCSS FROM home where page='$page'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['internalCSS'];
			}
		}else{
			echo "0 results";
		}
	?>

<?php
    $_user = $_SESSION['user'];
    $sql = "SELECT score FROM QuizScore where name='$user'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['internalCSS'];
			}
		}else{
			echo "0 results";
		}



?>

<?php

    include('../footer.html');
?>
