<!doctype html>
<?php
	session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>
</head>
    <body background = "img/backdrops/cbt.png">

	  <br/>
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	<h2><center>Login<center></h2>
	</div>
	
	<div id="body">
	<script type = "text/javascript" src = "js/register.js"></script>	
	<center>
        <h3>New Here?<a href="register.php">Click Here to Register</a></h3>
	    <form id = "myForm" action = "logincode.php" method="post">
	        <p>
	        <br/>
			
	    <label> Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        	<input type = "text" id = "userName" name="email">
        	</label>
        	<br/>
	    <label> Password:
	        <input type = "password" id = "initial" name = "password"/>
	    </label>
		
	    <br/>
	    <br/>
	    <!--input type = "submit" name = "submit" /-->
	    <input class="btn btn-default" type="submit" value="Submit">
	    </p>
	    </form>
	    
	    <ul class="nav nav-pills nav-stacked">
	</center>
	    <script type = "text/javascript">
	    	document.getElementById("userName").onsubmit = chkName;
	    	document.getElementById("initial").onsubmit = chkPassword;
	    </script>
	</div>
        </body>
        </font>
</html>
