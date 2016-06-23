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
echo "<center><h1> FINANCE MANAGER </H1>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
$result = mysql_query("SELECT * FROM manager where emp_id = 3");
if(!$result)
echo "hello";
echo "<form method='post' action='resume1.php' >";
echo " <select name ='app_id' >";
while ($row = mysql_fetch_array($result)) {
    echo "<option name = 'app_id' >";echo $row['app_id'];echo "</option>"; 
	}
	echo "<br>";
	echo "<input type='Submit' name='resume' value = 'Resume'>";
echo "</select>";
echo "</form>";
echo "</center>";
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
<title>Secured Page</title>
</head>
<body background="images/2.png">
<center>
<br />
<br />
<p><a href="emp_logout.php"><input type="button" values = "LOGOUT"></a></p>
</center>
</body>
</html>