<!doctype html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>

	<br/>  
</head>
<body background="img/backdrops/cbt.png">
	<center>
	<h1>Create an Account</h1>	
	<form action="processing.php" method="post">
	<p>First Name: <input type="text" name="fname" size="20" maxlength="50" /></p>
	<p>Last Name: <input type="text" name="lname" size="20" maxlength="50" /></p>
    <p>&nbsp&nbsp&nbspEmail: &nbsp&nbsp&nbsp&nbsp<input type="text" name= "email" size="20" maxlength="50" /></p>
    <p>&nbsp&nbsp&nbspPhone: &nbsp&nbsp&nbsp <input type="text" id="telephone" name="phone" size="20" maxlength="20" /></p>
	<p>Password: <input type="password" name="password" maxlength="50"></textarea></p>
	<p>Course: &nbsp&nbsp<input type="text" name="course" maxlength="50"></textarea></p>
	
	<br>	   
	<input class="btn btn-default" type="submit" value="Register" href="profile.php">
	<h4><a href="login.php">Back to Login</a></h4>
	</center>
	</form>
	
</body>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>
