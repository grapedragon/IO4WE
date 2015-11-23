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
    <?php
      include 'navbar.php';
    ?>

    <div class="container">

    <!--jumbotron-->
    <div class="header">
      <img src="img/jumbotron.png" class="img-responsive center-block"/>
    </div>
	
	<br>
	<!--login button-->
    <div class = "row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <a class="btn btn-default btn-block" href="login.html" role="button">Log In</a>
        </div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <a class="btn btn-primary btn-block" href="register.html" role="button">Sign Up</a>
      </div>
    </div>

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>

</html>