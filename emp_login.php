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
	$a=$_POST['emp_id'];
	$p = $_POST['password'];
	$login = mysql_query("SELECT * FROM employee WHERE (emp_id = '" .     mysql_real_escape_string($_POST['emp_id']) . "') and (password = '" .     mysql_real_escape_string($_POST['password']) . "')");
	if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['emp_id'] = $_POST['emp_id'];
// Jump to secured page
 header('Location: emp_secure.php');
}
else {
// Jump to login page
header('Location: emp.html');
}}
?>
<html>
<body background="images/2.png">
</body>
</html>