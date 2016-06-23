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
$query = "SELECT * FROM applicant"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
$x =0;
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
$x = $row['app_id'];
}
$x++;
echo "<center>";
echo "<h1>YOUR APPLICANT ID IS </h1><br>" .$x;
echo "<h3> Remember it will be used in Applicant Login</h3>";
echo "<center>";
	$p = $_POST['password'];
	$b=$_POST['name'];
	$c=$_POST['email'];
	$d=$_POST['qual'];
	$e=$_POST['contact'];
	$f=$_POST['exp'];
	$depart = $_POST['depart'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$query="INSERT INTO applicant(app_id,name,age,gender,qualification,experience,contact,email,app_depart)
	VALUES('$x','$b','$age','$gender','$d','$f','$e','$c','$depart')";
	$result=mysql_query($query);
	$i = 0;
	if(!$result)
	{
		$i=1;
		echo "Failed applicant";
	}
	$query="INSERT INTO app_login(app_id,password)
	VALUES('$x','$p')";
	$result=mysql_query($query);
	if(!$result)
	{
		$i = 1;
		echo "Failed login";
	}
	$date=date('d.m.y h:i:s');
	$query = "insert into applies(app_no,app_date)values('$x','$date')";
	$r=mysql_query($query);
	if(!$r)
	{
		$i = 1;
		echo "Failed date";
	}
	$k = 0;
	echo $depart;
	 if($depart == "FINANCE") {
		 $k = 1;
		$query = "insert into hr_head(app_id ,emp_id)values('$x','$k')";
		$result=mysql_query($query);
          if(!$result)
	{
		$i = 1;
		echo "Failed head 1";
	}	
	 }
	if($depart == "IM")
	{ $k = 2;
		$query = "insert into hr_head(app_id,emp_id)values('$x','$k')";
		$result=mysql_query($query);
		if(!$result)	
		{
			$i = 1;
		echo "Failed head 2";
		}
	}
    $date=date('d.m.y ');
	$query = "insert into app_status(app_id,result)values('$x','IN PROGRESS')";
	$r=mysql_query($query);
	if(!$r)
	{
		$i = 1;
		echo "Failed status";
	}
	if( $i == 0)
	{
		echo "<center>";
		echo "<h1> SUCCESFULLY REGISTERED</h1><br>";
		echo "<a href='home.html' ><input type = 'button' value='BACK'></a>";
		echo"</center>";
	
	}
//header('location:http//www.google.com');
?>