<!doctype html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Game Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>
</head>
    <body background = "img/backdrops/cbt.png">

    <!--navbar-->
    <?php
      include 'navbarAdmin.php';
    ?>
    <br/>
	<br/>
	<br/>        
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	</div>
	
	<div id="content">
	<center>
	<h3><center>SQUEAL! or Stay Silent...</center></h3>
	<img src="img/squeal.png" style="width:200px;height:320px;">
	<img src="img/silent.png" style="width:200px;height:320px;">
	<br/>
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
      </div>
	    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
        <br>
        <a class="btn btn-success btn-block" href="adminGameResult1.php" role="button">Squeal</a>
        </div>
		
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
        <br>
        <a class="btn btn-primary btn-block" href="adminGameResult2.php" role="button">Stay Silent</a>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
        </div>
    </div>
	</center>
	</div>

	<div id="footer">
	<center>
	</center>
	</div>
</body>
</font>
</html>
