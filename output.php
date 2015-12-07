<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Player List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>
</head>

    <!--navbar-->
    <?php
      include 'navbarAdmin.php';
    ?>
    <br/>
	<br/>
	<br/> 
<body background = "img/backdrops/cbt.png">
<h1><center>List of Current Users<center></h1>
<?php
    session_start();
	include("connection.php");
    echo "<br/>";
	$r = mysqli_query($dbc, "SELECT * FROM users");
	
    echo "<br/>";
    echo "<table align = 'center' border='1' cellspacing='3' cellpadding='3' width='75%'>
        <tr>
			<td align='left'><b>ID Number</b></td>
            <td align='left'><b>Name</b></td>
            <td align='left'><b>Email</b></td>
			<td align='left'><b>Phone</b></td>
			<td align='left'><b>Administrator</b></td>
			<td align='left'><b>Course</b></td>
			<td align='left'><b>Game Score</b></td>
        </tr>";

	while ($row = mysqli_fetch_array($r))
	{
		echo "<tr>
		    <td align='left'>".$row['Id-integer']."</td>
			<td align='left'>".$row['last_name'].", ".$row['first_name']."</td>
			<td align='left'>".$row['email']."</td>	
			<td align='left'>".$row['phone']."</td>				
			<td align='left'>".$row['isadmin']."</td>
			<td align='left'>".$row['course']."</td>
			<td align='left'>".$row['game_score']."</td>
        </tr>";  
	}
	mysqli_close($dbc); //always close the connection for security
	//echo "database connection closed."; //this echo is for testing stage only, no need to show it to user.
?>
</body>

   <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>