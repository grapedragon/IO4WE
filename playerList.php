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
    <br/>
	<br/>
	<br/>        
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	</div>
	
	<div id="container">
	<?php
	//Start the session
	session_start();
	include('connection.php');
		mysqli_query($dbc, "SELECT* FROM users");
		//Start the session
	include('connection.php');
	$query = "SELECT * FROM users"; 
    $result = mysql_query($query);
	
	echo "<table>";
	while($row = mysql_fetch_array($result))
	{   
	/*echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . $row['group'] . $row['email']. $row['pw']. $row['isAdmin'].
						$row['gamesplayed']. $row['runningscore']. $row['animal']. $row['color']."</td></tr>"; */ 
	echo "<tr><td>" . $row['Id-integer'] . $row['first_name'] . "</td><td>" . $row['last_name'] . $row['email']. $row['pw']. $row['isAdmin']."</td></tr>"; */
	}
	echo "</table>";
	mysql_close();
	?>
		
	</div>
	<div id="footer">
	<center>
	</center>
	</div>
</body>
</font>
</html>