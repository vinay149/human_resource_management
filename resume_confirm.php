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
$db=mysql_select_db($database, $conn);
session_start();
$id = $_POST['app_id'];
$query = "SELECT * FROM applicant where app_id = $id"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
echo "<center>";
echo "<h1> APPLICANT PROFILE </h1>";
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
if($i == 1 ){
	$q  = "insert into manager(emp_id,app_id) values(3,$id)";
	$result = mysql_query($q);
	if(!$result)
   {
	   echo "<mark> ALREADY FORWADRED</mark>";
   }
}
else{
   $q  = "insert into manager(emp_id,app_id) values(4,$id)";
   $result = mysql_query($q);
   if(!$result)
   {
	   echo "<mark>ALREADY FORWADRED</mark>";
   }
}
if($id == 1){
echo "<h1> FORWARDED </h1>";
echo "<a href='hr_head1.php'><input type='button' value='BACK' /><br /></a>";
echo "</center>";
}
else {
echo "<h1> FORWARDED </h1>";
echo "<a href='hr_head2.php'><input type='button' value='BACK' /><br /></a>";
echo "</center>";
}
?>
<html>
<head>
<style>
input[type=button] {padding:5px 15px; background:white; border:0 none;
cursor:pointer;
-webkit-border-radius: 5px;
border-radius: 5px;
font:Verdana, Geneva, sans-serif;
 }
</style>
</head>
<body background="images/2.png">
</body>
</html>