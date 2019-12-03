<?php
/*session_name("user");
?>

<?php
$_SESSION["loggedIn"] = null;
 if($_SESSION['loggedIn']){
    require('../header.html');
}
else{
require('../header2.html');
}
?>*/
<?php

    include('../footer.html');
?>
	

<?php
        $page = 'history';
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
        $page = 'history';
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

    include('../footer.html');
?>
