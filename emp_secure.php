<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['emp_id'])) {
header('Location: home.html');
}
$id = $_SESSION['emp_id'];
if($id == 1)
{
	header('Location: hr_head1.php');
}
else if($id == 2)
{
	header('Location: hr_head2.php');
}
if($id == 3)
{
	include ("manager1.php");
}
if($id == 4)
{
	include ("manager2.php");
}
if($id == 5)
{
	include ("interview1.php");
}
if( $id == 6)
{
	include("interview2.php");
}
?>
<html>

<head>
<title>Secured Page</title>
</head>
<body background="images/2.png">
<center>

<p><br>
<br><a href="emp_logout.php">Logout</a></p>
</center>
</body>
</html>