<?php
include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
//$phone = $_POST['phone'];
$password = $_POST['password'];
//if values are not empty, proceed to store them in the database
if(!empty($fname) && !empty($lname) && !empty($email) /* && !empty($phone) */&& !empty($password)){
		mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, pw) 
		VALUES ('$fname', '$lname', '$email', '$password')");
		echo " row  inserted, everything worked fine!";	
		}else{		
			echo "ERROR: you left some values in blank!";	
		}
	}else{
	echo "<strong>Please complete the form...</strong>";
}

?>
