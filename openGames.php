<!doctype html>
<html>
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
      include 'navbar.php';
    ?>

    <div class="container">

    <table align = center>
		<tr>
			<td><a class="btn btn-default btn-block" href="playerList.php" role="button">View Players</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="edit-profile.html" role="button">Assign Groups</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="gameResult.html" role="button">View Scores</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="opengames.php" role="button">View Open Games</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="edit-profile.html" role="button">Toggle Game Type</a></td>
		</tr>
		<tr>
			<td><a class="btn btn-default btn-block" href="edit-profile.html" role="button">Edit Profile</a></td>
		</tr>
	</table>


    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
