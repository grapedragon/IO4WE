<!doctype html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Who is Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>
</head>
    <body background="img/backdrops/cbt.png">

    <!--navbar-->
    <?php
      include 'navbarAdmin.php';
    ?>
    <br/>
	<br/>
	<br/>             
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	<h3><center>Who's Online?<center></h3>
	</div>

	<div id="content">
		<center>
		Check other user's that are online
		</center>
	</div>

<?php
	include("connection.php");
    echo "<br/>";
	$r = mysqli_query($dbc, "SELECT * FROM users");
	
    echo "<br/>";
    echo "<table align = 'center' border='1' cellspacing='3' cellpadding='3' width='75%'>
        <tr>
            <td align='left'><b>NAME</b></td>
			<td align='left'><b>COURSE</b></td>
			<td align='left'><b>EMAIL</b></td>
        </tr>";

	while ($row = mysqli_fetch_array($r))
	{
		echo "<tr>
			<td align='left'>".$row['last_name'].", ".$row['first_name']."</td>
			<td align='left'>".$row['course']."</td>	
			<td align='left'>".$row['email']."</td>		
        </tr>";  
	}
	mysqli_close($dbc); //always close the connection for security
	//echo "database connection closed."; //this echo is for testing stage only, no need to show it to user.
?>
</body>
</font>
</html>
