<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$servername ="localhost";
$username = "root";
$password = "";
$database="hr";
$tbl_name="applicant";
$conn=mysql_connect($servername , $username , $password);
if(!$conn)
{
	echo "DATABASE ERROR";
}
$db = mysql_select_db($database,$conn);
//session_start();
$id = $_POST['app_id'];
$date =  $_POST['d'];
$time = $_POST['t'];
$query = "update app_status set result = 'Assigned Interview' ,date = '$date' ,time = '$time' where app_id = $id"; 
$result = mysql_query($query);
if(!$result)
 {
	echo "error";
 }
$query = "SELECT * FROM applicant where app_id = $id"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
echo "<center>";

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<table border='2' cellspacing='3' cellpadding='4'>"; // start a table tag in the HTML
echo "<tr ><td> APPLICANT ID </td><td>NAME</td><td>AGE</td>
<td>GENDER</td><td>QUALIFICATION</td><td>EXPIRENCE</td><td>CONTACT</td><td>EMAIL</td><td>APPLICANT DEPARTMENT</td></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['app_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td>
<td>" . $row['gender'] . "</td><td>" . $row['qualification'] . "</td><td>" . $row['experience'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['email'] . "</td><td>" . $row['app_depart'] . "</td></tr>";  //$row['index'] the index here is a field name
if($row['app_depart'] == 'FINANCE') {
	$i = 1;
}
else  { $i = 2;
}
}
$ewp =0;
if($i == 1 ){
	$q  = "insert into interview(app_id,emp_id) values($id,5)";
	$emp = 3;
	$result = mysql_query($q);	
	if(!$result)
   {
	   echo "<mark> ALREADY ASSIGNED</mark><br><br>";
   }else
   echo "<h1><p> ASSIGNED INTERVIEW</p> </h1>";
echo "<a href='manager1.php'><input type='button' value='BACK' /><br /></a>";
echo "</center>";
}
else{
   $q  = "insert into interview(app_id,emp_id) values($id,6)";
   $result = mysql_query($q);
   $emp = 4;
   if(!$result)
   {
	   echo "<mark>ALREADY ASSIGNED</mark><br><br>";
   }else
   echo "<p><h1>ASSIGNED INTERVIEW</h1></p>";
echo "<a href='manager2.php'><input type='button' value='BACK' /><br /></a>";
echo "</center>";
}

?>
<html>
<head>
</head>
<body background="images/2.png">
<h1> APPLICANT PROFILE </h1>
</body>
</html>