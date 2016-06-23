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
$query = "update app_status set result = 'Selected' where app_id = $id"; 
$result = mysql_query($query);
echo "<center>";
if($result)
 {
	echo "<h1> SELECTED</H1>";
 }
 else
 {
	 echo "error occured";
 }
 echo "<a href='interview1.php'><input type='button' value='BACK' /><br /></a>";
echo "<center>";
 ?>
 <html>
<body background="images/2.png">
</body>
</html>