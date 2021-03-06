<!doctype html>
<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>My Profile - Edit</title>
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
     
    <!--row 1 -->
    <div class="row">
      <br><br>
      <h2>Your Profile</h2>
      <p>
      </p>
    </div>

    <!-- row 2 -->
    <div class="row">
      <br><br>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address *required</label>
          <input type="email" class="form-control" id="useremail" placeholder="Email needed to apply changes">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password *required</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password needed to apply changes">
        </div>
        <br><h2>Password Change</h2>
        <div class="form-group">
          <label for="exampleInputPassword1">New Password</label>
          <input type="password" class="form-control" id="newpw" placeholder="Password needed to apply changes">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm New Password</label>
          <input type="password" class="form-control" id="confirmnewpw" placeholder="Password needed to apply changes">
        </div>
        <br><h2>Enroll in a Course</h2>
        <div class="form-group">
          <label for="exampleInputPassword1">Course ID</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter the Course ID provided by your instructor">
        </div>
        <!--submit button-->
        <br>
        <button type="submit" class="btn btn-success">Apply Changes</button>
      </form>
      <br><br>
    </div>


  </div><!--container-->


    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>

</html>