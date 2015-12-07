<!doctype html>
<html>
 <?php
	include 'session.php';
 ?>
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
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
    <div class="container">

    <table align = center>
		<tr>
			<td><a class="btn btn-default btn-block" href="output.php" role="button">View All Registered Players</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="edit-profile.php" role="button">Assign Groups</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="gamePage.php" role="button">Play Game</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="edit-profile.php" role="button">Toggle Game Type</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="edit-profile.php" role="button">Edit Profile</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="addNewPlayer.php" role="button">Add New User</a></td>
		</tr>
	</table>


    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
