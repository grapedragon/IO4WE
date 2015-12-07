<?php
error_reporting(-1);
session_start(); 

$mysqli = new mysqli("localhost","root","indexme","mytestdatabase");
//$mysqli = new mysqli("localhost","root","","mytestdatabase");
// Storing Session

//$user_check = $_SESSION['login_user'];
$result = $mysqli->query("SELECT * from users where email='".$user_check."'");
$row = $result->fetch_assoc();
$login_session = $row['first_name'];
$login_lname = $row['last_name'];
$login_session_email = $row['email'];
$login_game_score = $row['game_score'];
//$_SESSION['login_id'] = $login_id;

if(!isset($login_session))
{
	mysqli_close($mysqli);
	//header('Location: index.php'); // Redirecting To Home Page
}
?>