<!doctype html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>
</head>
    <body background="img/backdrops/cbt.png">

    <!--navbar-->


    <div class="container">

    <!--jumbotron-->
    <div class="header">
	  <br/>
	  <br/>
	  <br/>
      <img src="img/jumbotron-sm.png" class="img-responsive center-block"/>
    </div>
	
	<br>
	<!--login button-->
    <div class = "row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
          <a class="btn btn-primary btn-block" href="login.php" role="button">Log In</a>
        </div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
          <a class="btn btn-default btn-block" href="register.php" role="button">Sign Up</a>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
        </div>
    </div>

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>

	 <footer>
	 <center>
	 <br>
	 <br>
	 <br>
	  <p>Web Development Group Project</p>
	  <p><a href="http://wiki.ggc.edu/wiki/ITEC4450:Fall2015:Group4">IO4WE Wiki Page</a></p>
	  </center>
	</footer> 
	
</html>
