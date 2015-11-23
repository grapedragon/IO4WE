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
      include_once 'navbar.php';
    ?>

    <div class="container">

    <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
            </div>
            <div class = "col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <h1><center>You have successfully logged out!</center></h1>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
            </div>
    </div>

    <!--jumbotron-->
    <div class="header">
      <img src="img/jumbotron-sm.png" class="img-responsive center-block"/>
    </div>
	
	<br>
	<!--login button-->
    <div class = "row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
          <a class="btn btn-default btn-block" href="login.html" role="button">Log In</a>
        </div>
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
          <a class="btn btn-primary btn-block" href="register.html" role="button">Sign Up</a>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
        </div>
    </div>

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>

</html>
