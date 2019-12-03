<?php

    include('../header.html');
?>

<?php   

    $visitName = $_POST['visitName'];
    $rateQuiz = $_POST['rateQuiz'];
    $hardTopic = $_POST['hardTopic'];
    $websiteImprove = $_POST['websiteImprove'];

    $destination_email = "mxm7298@rit.edu,jlb2886@rit.edu,rxt3820@rit.edu,ker3082@rit.edu";
    $email_subject = "Basix w: Unix, Survey";

    $email_body = "Visitor Name: " . $visitName . "\n";
    $email_body .= "Quiz rating: " . $rateQuiz . "\n";
    $email_body .= "Topics could use more reinforcement with: " . $hardTopic . "\n";
    $email_body .= "How the website could be improved: " . $websiteImprove . "\n";

    mail($destination_email, $email_subject, $email_body);
?>

<?php
        $page = 'surveyprocess';
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
        $page = 'surveyprocess';
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
