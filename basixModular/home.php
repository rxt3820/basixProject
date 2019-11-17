<!doctype html>

<html>
  <head>
    <title>basiX W UniX</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="mainUpdated.css">
        <script src="main.js"></script>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
    <$php
      $picture='';
        require $path.'../../../dbConnect.inc';
      $sql = "SELECT content FROM home where page = '$home'";
      $result = $mysqli->query($sql);

      if($result->num_rows > 0){
        //output the data for each row
        while ($row = $result->FETCH_ASSOC()) {
          echo $row['content']
        } // while
      } // if
      else {
        echo "0 results";
      } // else
    ?>
  <$php
    $len = 0;
    $sql = "SELECT * from pictures where picture_id = '5'";
    if($results = $mysqli->query($sql)) {
      //printf("select returned %d rows<br/>", $results->num_rows);
      //same as below
      $len = results->num_rows;
      // echo("<h3>select returned".$results->num_rows." rows</h3><br>");
    } // if
  else {
    echo 'issue with query';
  }
  //make a multi-dimentional ARRAY
  if($results) {
    //loop through results
    while($rowHolder = mysql_fetch_array($results,MYSQLI_ASSOC)) {
      $records[]=$rowHolder;
    }
  }

  foreach($records as $currRecord) {
    $picture = $currRecord['image'];
    $caption = $currRecord['page_title_of_picture'];
  }

  ?>
  <body>
  <div id="container">
    <div id="bgimage">
        <div id="cont">
          <div id="term" class="term term-ready">
            <input id="term-input-hide" />
            <div id="term-bar">
              <div id="term-winctrl">
                <span id="term-btn-close"></span>
                <span id="term-btn-minimise"></span>
                <span id="term-btn-maximise"></span>
              </div> <!-- end of term-winctrl -->
                <span id="term-title">Terminal</span>
                  <a target="_blank" id="term-bar-gh"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg></a>
              </div> <!-- end of term-bar -->
                <div id="term-cont">
                  <div id="term-line">
                    <span id="term-prompt">w:/$ </span><span id="term-cmd current">Welcome to Basix with Unix!</span>
                    <br>
                    <span id="term-prompt">w:/$ </span><span id="term-cmd current"></span><span id="term-caret">&#x2588;</span>
                  </div> <!-- end of term-line -->
                </div> <!-- end of of term-cont -->
            </div> <!-- end of term-bar-->
          </div> <!-- end of term -->
        </div> <!-- end of cont -->
        <div id="bg">
            <p>
        <h1 id="about">about:/</h1>
            <div id="abouttext">
              <p>
               Our Basix with Unix website is an educational website to help teach people the fundamentals of Unix. On our website, you will explore subjects that pertain to learning Unix Commands, learning the fundamental difference between Linux and Unix, and having a core understanding of how to use Unix commands in the real world.
              </p>
            </div> <!-- end of abouttext -->
            
        </div> <!-- end of about -->
    </div> <!-- end of container div -->
  </body>
</html>