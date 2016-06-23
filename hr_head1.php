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
echo "<center><h1>FINANCE HR HEAD </H1>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
$result = mysql_query("SELECT * FROM hr_head where emp_id = 1");
echo "<form method='post' action='resume.php' >";
echo " <select name ='app_id' >";
while ($row = mysql_fetch_array($result)) {
    echo "<option name = 'app_id' >";echo $row['app_id'];echo "</option> &nbsp;"; 
	}
	echo "<br>";
	echo "<input type='Submit' name='resume' value = 'Resume'>";
echo "</select>";
echo "</form>";
echo "</center>";
?>
<html>
<head>
<title>Secured Page</title>
</head>
<body background="images/2.png">
<center>
<br />
<br />
<p><a href="emp_logout.php">Logout</a></p>
</center>
</body>
</html>