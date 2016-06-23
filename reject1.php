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
$id = $_POST['app_id'];
$query = "UPDATE app_status set result ='Rejected' where app_id = $id"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
if($result) {
echo "<center><h1> REJECTED </H1>";
echo '<a href="interview1.php"><input type="button" value="BACK" /><br /></a>';
}
?>
<html>
<body background="images/2.png">
</body>
</html>