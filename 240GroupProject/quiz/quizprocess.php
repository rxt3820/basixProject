<?php 
    
    session_start();    
    session_name("mikimian");

    include('../header.html');
?>

<?php
        $page = 'quizprocess';
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

    $question1User = $_POST['question1'];
    $question2User = $_POST['question2'];
    $question3User = $_POST['question3'];
    $question4User = $_POST['question4'];
    $question5User = $_POST['question5'];

    $countCorrect = 0;

?>

    <body>
        <div id = "wrapper">
                 
            <div class = "questionBorder">
                <div class = "questionWindow">    
                        <?php
                            if ($question1User != $_SESSION['$question1Answer']) {
                                echo '<p class ="incorrect"> Question 1.</span>';
                            } else {
                                echo '<p class ="correct"> Question 1.</span>';
                                $countCorrect++;
                            }
                        ?>
                    <p class = "question"> <?php echo $_SESSION['$question1Question']; ?> </p>
                </div>
            </div>

            <div class = "questionBorder">
                <div class = "questionWindow">    
                        <?php
                            if ($question2User != $_SESSION['$question2Answer']) {
                                echo '<p class ="incorrect"> Question 2.</span>';
                            } else {
                                echo '<p class ="correct"> Question 2.</span>';
                                $countCorrect++;
                            }
                        ?>
                    <p class = "question"> <?php echo $_SESSION['$question2Question']; ?> </p>
                </div>
            </div>

            <div class = "questionBorder">
                <div class = "questionWindow">    
                        <?php
                            if ($question3User != $_SESSION['$question3Answer']) {
                                echo '<p class ="incorrect"> Question 3.</span>';
                            } else {
                                echo '<p class ="correct"> Question 3.</span>';
                                $countCorrect++;
                            }
                        ?>
                    <p class = "question"> <?php echo $_SESSION['$question3Question']; ?> </p>
                </div>
            </div>

            <div class = "questionBorder">
                <div class = "questionWindow">    
                        <?php
                            if ($question4User != $_SESSION['$question4Answer']) {
                                echo '<p class ="incorrect"> Question 4.</span>';
                            } else {
                                echo '<p class ="correct"> Question 4.</span>';
                                $countCorrect++;
                            }
                        ?>
                    <p class = "question"> <?php echo $_SESSION['$question4Question']; ?> </p>
                </div>
            </div>

            <div class = "questionBorder">
                <div class = "questionWindow">    
                        <?php
                            if ($question5User != $_SESSION['$question5Answer']) {
                                echo '<p class ="incorrect"> Question 5.</span>';
                            } else {
                                echo '<p class ="correct"> Question 5.</span>';
                                $countCorrect++;
                            }
                        ?>
                    <p class = "question"> <?php echo $_SESSION['$question5Question']; ?> </p>
                </div>
            </div>

            
            <h1 id = "userScore"> You received a score of <?php echo $countCorrect ?> / 5 </h1>
            
            <form action = "../survey/home.php" method = "POST">
                <div id = "surveyButton">
                    <button id = "submitSurvey" type = "submit"><img id = "surveyPic" src = "../assets/survey.png"></button>
                </div>
            </form>                                                                                              
            
        </div>
    </body>

<?php
        $page = 'quizprocess';
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