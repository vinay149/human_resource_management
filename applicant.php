<html>
<title>Applicant Registration</title>
<head>
	<meta charset="utf-8" />
	<title>Login Form</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<center>
<h1>
Applicant Registration
</h1>
<br><br>
<form action="action.php" method="POST">
NAME :<input type="text" name="name" id="name"><br><br>
Password<input type="password" name="password" id="password">
<br><br>
QUALIFICATION :<select name = "qual" >
  <option name = "qual" value="BT.ECH">B.TECH</option>
  <option name = "qual" value="M.TECH">M.TECH</option>
  <option name = "qual" value="M.C.A">M.C.A</option>
  <option name = "qual" value="B.B.S">B.B.S</option>
  <option name = "qual" value="M.B.A">M.B.A</option>
</select><br><br>
AGE :<input type="text" name="age" id="age"><br><br>
GENDER : <select name ="gender">
<option name ="gender" value = "MALE">MALE</option>
<option name ="gender" value = "FEMALE">FEMALE</option>
</select>
EXPERIENCE :<select name = "exp" >
  <option name = "exp" value="1">1 Years</option>
  <option name = "exp" value="2">2 Years</option>
  <option name = "exp" value="3">3 Years</option>
</select><br><br>
DEPARTMENT :<select name = "depart" >
  <option name = "depart" value="FINANCE">FINANACE</option>
  <option name = "depart" value="IM">IM</option>
</select><br><br>
CONTACT NUMBER :<input type="text" name="contact" id="contact"><br><br>
EMAIL  :<input type="text" name="email" id="email"><br><br>
<input type="Submit" name="submit it" >
</form>
</center>
</body>
</html>