<?php
    $path = './';
  	require $path."../dbConnect.inc";
	if ($mysqli) {
	  if (isset($_GET['name'])){

        $name = $_GET['name'] ;
        $comment = $_GET['comment'];


        $stmt=$mysqli->prepare("INSERT INTO comments (name,comment) VALUES (?,?)");

		$stmt->bind_param("ss", $name, $comment);

		$stmt->execute();
		$stmt->close();
      }//end of isset
	  //get contents of table and send back...
      $sql = 'select name, comment from comments;';
	  $res=$mysqli->query($sql);
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;

            // echo "<table>";
            // echo "<th>Name</th>";
            // echo "<th>comment</th>";
            // echo "<tr";
            // echo "<td>" .$records . "</td>";
            // echo "</tr>";
            // echo "</table>";

		}// end of while
        //var_dump($records);
	  }// end of if
	}// end of mysqli
?>
<!DOCTYPE html>
<html lang="en">
<title>Dev's B Blog</title>
<head>
<link rel="stylesheet" href="main.css">
<script src ="main.js"></script>
</head>
<body>
    <div class="home">
        <div class="buttons">
        <div class="container2">

            <a href="https://people.rit.edu/~dmb4086/iste240/index.html" class="btn effect01" target="_blank"><span>Home</span></a>
        </div>
    </div>
    </div>

<div class="login-page">
  <div class="form">

    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="GET" onsubmit="return validateForm();">

      <input id="name" type="text" placeholder="Name" name="name" />
      <input id="comment" type="text" placeholder="Comment" name="comment" />
      <button class="btn effect012">Submit</button>

    </form>
  </div>
</div>



<!-- <table>
<tr>
    <th colspan="4" align="center"> <h1>Blog Comments</h1></th>

</tr>
<tr>
<td>ID</td>
<td>Name</td>
<td>Date </td>
<td>Comment</td>

</tr> -->
<div class="table-title">
    <h3>Comments Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Name</th>
<th class="text-left">Comments</th>
</tr>
</thead>
<tbody class="table-hover">

<?php
foreach ($records as $this_row) {
    // echo "<td>" . $this_row['name'] . $this_row['comment'] .  "</td>";
    echo "<tr>";
    echo '<td class="text-left" >' . $this_row['name'] . "</td>";
    echo '<td class="text-left">'. $this_row['comment'] . "</td>" ;
    echo "</tr>";
}

?>

</tbody>
</table>
</body>
</html>
