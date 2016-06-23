<html>
<head>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$db1="hr";
$tb1="applicant";
$conn=mysql_connect($servername ,$username, $password);
$db=mysql_select_db($db1, $conn);
$a=$_POST['App_ID'];
$result=mysql_query("SELECT  Name , Email ,Qualification , Contact_Details , Experience FROM applicant WHERE App_ID=$a");
$row=mysql_fetch_row($result);
if($row[0]){
echo '<div class="jumbotron"><h1>About the Applicants </h1></div>';
echo '<h4 class="text-primary">Name of The Applicant:</h4>'.$row[0];  
echo "<br>";                                                 
echo '<h4 class="text-primary">Email of The Applicant:</h4>'.$row[1];
echo "<br>";
echo '<h4 class="text-primary">Qualification of The Applicant:</h4>'.$row[2];
echo "<br>";
echo '<h4 class="text-primary">Contact_Details of The Applicant:</h4>'.$row[3];
echo "<br>";
echo '<h4 class="text-primary">Experience of The Applicant:</h4>'.$row[4];
echo '<div class="row footer"><h2>Forward The Details To Manager</h2></div>';
echo '<div class="from-group"><form method="POST" action="manager.php" >
      <input type="text" name="App_ID" ></input>
	  <input type="submit" class="btn-primary" name="forward" value="forward"></input>
	  </form></div>';
}
else
{
	echo "data is not found";
}


?>

</body>
</html>