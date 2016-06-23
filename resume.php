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
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<table border='0' cellpadding='10px'  height='150px' bordercolor='#FF6666'>"; // start a table tag in the HTML
echo "<tr bgcolor='#009933' height='60' ><td>APPLICANT ID </td><td>NAME</td><td>AGE</td>
<td>GENDER</td><td>QUALIFICATION</td><td>EXPIRENCE</td><td>CONTACT</td><td>EMAIL</td><td>APPLICANT DEPARTMENT</td></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr bgcolor='#CCCCCC'><td>" . $row['app_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td>
<td>" . $row['gender'] . "</td><td>" . $row['qualification'] . "</td><td>" . $row['experience'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['email'] . "</td><td>" . $row['app_depart'] . "</td></tr>";  //$row['index'] the index here is a field name
}
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
<title>Resume</title>
</head>
<body background="images/2.png">
<H1> CONFIRM APPLICANT ID FORWARD PROCESS</H1>
<H4> Please write the applicant id to confirm </H4>
<form method="post" action="resume_confirm.php">
<input type= "text" placeholder="APPLICANT ID"  name="app_id" />&nbsp;
<input type="submit"  value="FORWARD" />
<br /><br /><br /><br />
</form>
<a href="hr_head1.php"><input type="button" value="BACK" /><br /></a>
<h1> APPLICANT PROFILE </h1>
<br />
</body>
</html>
