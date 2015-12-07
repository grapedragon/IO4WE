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
      include 'navbar.php';
    ?>
    <br/>
    <br/>
	<br/>	
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	</div>
	
	<div id="content">
	<center>
	<h2><center>You Squealed!!!</center></h2>
	</center>
	</div>
	
	<br>
	<center>
	<?php
	  $random = rand(0,1);
	  if ($random == 0) 
	  {
		echo "<img src=img/squeal.png style=width:200px;height:320px;>";
		echo "<img src=img/squeal.png style=width:200px;height:320px;>";
		echo "<h3>And so did your partner!!!<br><br>"; 
		echo "<h3>YOU EARNED 5 POINTS!"; 
	  }
	  
	  if ($random == 1) 
	  {
		echo "<img src=img/squeal.png style=width:200px;height:320px;>";
		echo "<img src=img/silent.png style=width:200px;height:320px;>";
		echo "<h3>But your partner stayed silent!!!<br><br>"; 
		echo "<h3>YOU EARNED 20 POINTS!"; 
	  }
	?>
	</center>

	<div id="footer">
	<center>
		<h3><a href="profile.php">Return to your Profile</a></h3>
	</center>
	</div>
</body>
</font>
</html>
