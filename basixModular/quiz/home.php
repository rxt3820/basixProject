<?php 
    
    session_start();    
    session_name("mikimian");

    include('../header.html');
?>

<?php
    $page = 'quiz';
    require '../dbConnect.inc';  
        
    if($mysqli) {
        $sql = 'SELECT question, choice1, choice2, choice3, choice4, correctAnswer FROM ModularQuiz ORDER BY RAND() LIMIT 5';
        
        $result = $mysqli->query($sql);

        if($result) {
            while($rowHolder = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $records[] = $rowHolder;
            }
        }
        
        $_SESSION['$question1Question'] = $records[0]['question'];
        $_SESSION['$question2Question'] = $records[1]['question'];
        $_SESSION['$question3Question'] = $records[2]['question'];
        $_SESSION['$question4Question'] = $records[3]['question'];
        $_SESSION['$question5Question'] = $records[4]['question'];
        
        $_SESSION['$question1Answer'] = $records[0]['correctAnswer'];
        $_SESSION['$question2Answer'] = $records[1]['correctAnswer'];
        $_SESSION['$question3Answer'] = $records[2]['correctAnswer'];
        $_SESSION['$question4Answer'] = $records[3]['correctAnswer'];
        $_SESSION['$question5Answer'] = $records[4]['correctAnswer'];
        
    }
?>

<?php
        $page = 'quiz';
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

    <body>
        <div id = "wrapper">
            
                <form name="quiz" action ="quizprocess.php" method="POST">
                    
                    <div class = "questionBorder">
                        <div class = "questionWindow">
                            <p class = "questionNum"> Question 1.</p>
                            <p class = "question"><?php echo $records[0]['question']; ?></p>

                            <div class = "questionChoices">
                                <label><input type = "radio" name = "question1" value = "1"> <?php echo $records[0]['choice1']; ?> </label><br>
                                <label><input type = "radio" name = "question1" value = "2"> <?php echo $records[0]['choice2']; ?></label><br>
                                <label><input type = "radio" name = "question1" value = "3"> <?php echo $records[0]['choice3']; ?> </label><br>
                                <label><input type = "radio" name = "question1" value = "4"> <?php echo $records[0]['choice4']; ?> </label><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "questionBorder">
                        <div class = "questionWindow">
                            <p class = "questionNum"> Question 2. </p>
                            <p class = "question"> <?php echo $records[1]['question']; ?> </p>

                             <div class = "questionChoices">
                                <label><input type = "radio" name = "question2" value = "1"> <?php echo $records[1]['choice1']; ?> </label><br>
                                <label><input type = "radio" name = "question2" value = "2"> <?php echo $records[1]['choice2']; ?> </label><br>
                                <label><input type = "radio" name = "question2" value = "3"> <?php echo $records[1]['choice3']; ?></label><br>
                                <label><input type = "radio" name = "question2" value = "4"> <?php echo $records[1]['choice4']; ?> </label><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "questionBorder">
                        <div class = "questionWindow">
                            <p class = "questionNum"> Question 3. </p>
                            <p class = "question"> <?php echo $records[2]['question']; ?> </p>

                             <div class = "questionChoices">
                                <label><input type = "radio" name = "question3" value = "1"> <?php echo $records[2]['choice1']; ?> </label><br>
                                <label><input type = "radio" name = "question3" value = "2"> <?php echo $records[2]['choice2']; ?> </label><br>
                                <label><input type = "radio" name = "question3" value = "3"> <?php echo $records[2]['choice3']; ?> </label><br>
                                <label><input type = "radio" name = "question3" value = "4"> <?php echo $records[2]['choice4']; ?> </label><br>
                            </div>
                        </div>
                     </div>
                    
                    <div class = "questionBorder">
                        <div class = "questionWindow">
                            <p class = "questionNum"> Question 4. </p>
                            <p class = "question"> <?php echo $records[3]['question']; ?> </p>

                             <div class = "questionChoices">
                                <label><input type = "radio" name = "question4" value = "1"> <?php echo $records[3]['choice1']; ?> </label><br>
                                <label><input type = "radio" name = "question4" value = "2"> <?php echo $records[3]['choice2']; ?> </label><br>
                                <label><input type = "radio" name = "question4" value = "3"> <?php echo $records[3]['choice3']; ?> </label><br>
                                <label><input type = "radio" name = "question4" value = "4"> <?php echo $records[3]['choice4']; ?> </label><br>
                            </div>
                        </div>
                    </div>

                    <div class = "questionBorder">
                        <div class = "questionWindow">
                            <p class = "questionNum"> Question 5. </p>
                            <p class = "question"> <?php echo $records[4]['question']; ?> </p>

                             <div class = "questionChoices">
                                <label><input type = "radio" name = "question5" value = "1"> <?php echo $records[4]['choice1']; ?> </label><br>
                                <label><input type = "radio" name = "question5" value = "2"> <?php echo $records[4]['choice2']; ?> </label><br>
                                <label><input type = "radio" name = "question5" value = "3"> <?php echo $records[4]['choice3']; ?> </label><br>
                                <label><input type = "radio" name = "question5" value = "4"> <?php echo $records[4]['choice4']; ?> </label><br>
                            </div>
                        </div>
                    </div>
                    
                    <div id = "quizButton">
                        <button id = "submitQuiz" type = "submit"><img id = "submitPic" src = "../assets/submit.png"></button>
                     </div>      
                </form>
        </div>
    </body>

<?php
        $page = 'quiz';
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