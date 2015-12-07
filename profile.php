 <?php
	include("session.php");
 ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel ="stylesheet">
    <script src="js/respond.js"></script>
  </head>
  <body background="img/backdrops/cbt.png">

    <!--navbar-->
    <?php
      include 'navbar.php';
    ?>
    <br/>
	<br/>
    <div class="container">

    <!--row 1 -->
    <div class="row">
      <br><br>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 push">
        <img src="img/profilepics/orange-ram.png" class="img-responsive hidden-xs">
      </div>
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
        <h1>Name: <?php echo $login_session. " ".$login_lname; ?></h1>
        <h2>Alias: <?php echo $login_session. " ".$login_lname; ?></h2>
      </div>
    </div>

    <!-- row 2 -->
    <div class="row">
      <br><br>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
        <br><br>
        <a class="btn btn-default btn-block" href="edit-profile.php" role="button">Edit Profile</a>
      </div>
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
        <h2>Running Score: <?php echo $login_game_score; ?></h2>
        <br><h3>Member of:</h3>
        <p><b>BIOL 1101-K, Fall 2015</b></p>
        <p>Dr. Bio-man</p><br>
        <p><b>PSYC 3100, Spring 2015</b></p>
        <p>Dr. Psycho-man</p><br>
      </div>
    </div>

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>
