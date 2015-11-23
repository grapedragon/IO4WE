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
    <nav class="navbar navbar-inverse">
     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
              <li><a href = "index.html">Home</a></li>
              <li class="active"><a href="gamePage.html">Play Game<span class="sr-only">(current)</span></a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href = "whosonline.html">Whos online</a></li>
        </ul>
        </div> <!-- /.collapse Navar-collapse -->
     </div><!-- /.container-fluid -->
    </nav>
            
	<div id="header">
	<h1><center>Prisoner's Dilemma<center></h1>
	</div>
	
	<div id="container">
	<?php
	//Start the session
	session_start();
	include('connection.php');
		mysqli_query($dbc, "SELECT* FROM users");
	?>
		
	</div>
	

	<div id="footer">
	<center>
	</center>
	</div>
</body>
</font>
</html>



