<?php
error_reporting(E_ALL ^ E_DEPRECATED);
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
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['app_id'])) {
header('Location: home.html');
}
$id = $_SESSION['app_id'];
$query = "SELECT * FROM employee"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
echo "<center>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
$x =0;
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$x = $row['emp_id'];
}
$x++;
//echo $x;
echo "<h1> YOUR EMPLOYEE ID IS </h1>";
echo "<br><br>";
echo "<h1>".$x. "</h1>";
?>
<html>
<body>
<body background="images/2.png">
</body>
</body>