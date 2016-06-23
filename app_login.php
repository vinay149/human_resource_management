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

// Include database connection settings
if($db)
{
	$a=$_POST['app_id'];
	$p = $_POST['password'];
	$login = mysql_query("SELECT * FROM app_login WHERE (app_id = '" .     mysql_real_escape_string($_POST['app_id']) . "') and (password = '" .     mysql_real_escape_string($_POST['password']) . "')");
	if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['app_id'] = $_POST['app_id'];
// Jump to secured page
 header('Location: app_secure.php');
}
else {
// Jump to login page
header('Location: home.html');
}}
?>
