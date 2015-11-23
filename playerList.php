<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/respond.js"></script>
</head>
    <body>

    <!--navbar-->
    <?php
      include 'navbar.php';
    ?>
            
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	</div>
	
	<div id="container">
	<?php
<<<<<<< HEAD
	//Start the session
	session_start();
	include('connection.php');
		mysqli_query($dbc, "SELECT* FROM users");
=======
		//Start the session
	session_start();
	include('connection.php');
	mysqli_query($dbc, "SELECT* FROM users");
>>>>>>> a02b89b5b4a666fbfaf21cc53101414dcbeee5dd
	?>
		
	</div>
	

	<div id="footer">
	<center>
	</center>
	</div>
</body>
</font>
</html>



