<html>
<head>
<title>Secured Page</title>
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
<div class = class="container">
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
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['app_id'])) {
header('Location: home.html');
}
$id = $_SESSION['app_id'];
//echo $id;
$query = "SELECT * FROM applicant where app_id = $id"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
echo "<center>";
echo "<h1> APPLICANT PROFILE </h1>";
echo "<br>";echo "<br>";echo "<br>";
echo "<table border='0' cellpadding='10px'  height='150px' bordercolor='#FF6666'>";echo "<tr bgcolor='#009933' height='60'><td>APPLICANT ID </td><td>NAME</td><td>AGE</td>
<td>GENDER</td><td>QUALIFICATION</td><td>EXPIRENCE(years)</td><td>CONTACT</td><td>EMAIL</td><td>APPLICANT DEPARTMENT</td></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr bgcolor='#CCCCCC' ><td>" . $row['app_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td>
<td>" . $row['gender'] . "</td><td>" . $row['qualification'] . "</td><td>" . $row['experience'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['email'] . "</td><td>" . $row['app_depart'] . "</td></tr>";  //$row['index'] the index here is a field name
echo "</table>";
}
$query = "SELECT * FROM app_status where app_id = $id"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
echo "<center>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$x = $row['result'];
$y = $row['date'];
$z = $row['time'];
}
if($x == 'Selected')
{
	echo " <h2> CONGRATS!!! YOU HAVE BEEN SELECTED  <h2>";
	echo  "<h3> DO you want to be part of our association</h3>";
	echo "<form method='post' action='add_emp.php'>"; 
	echo "<input type='submit' value='YES' >";
}
else if($x == 'Rejected')
{
	echo "<h2> REJECTED</h2>";
}
else if($x == 'Assigned Interview')
{
	echo "<table border='0' cellpadding='10px'  height='150px' bordercolor='#FF6666'>"; // start a table tag in the HTML
echo "<tr bgcolor='#009933' height='60'><td>STATUS</td> <td> DATE</td>
<td>TIME</td></tr>";
echo "<tr bgcolor='#CCCCCC'><td>" . $x . "</td><td>" . $y . "</td><td>" . $z. "</td></tr>";
echo "</table>";
}
else if( $x =='IN PROGRESS')
{
	echo "<h3> IN PROGRESS </h3>";
}
echo "</center>";
?>
</div>
<center>
<p>
<br><br>

<a href='app_logout.php'><input type="button" value="LOGOUT"></a></p>
</center>
</body>
</html>