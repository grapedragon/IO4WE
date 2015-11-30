<?php

$sent = false;

if ( isset($_POST['register']) ) 
    {
        $error = array();

        //Password validation: must contain at least 1 letter and number. Allows characters !@#$% and be 6-15 characters
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,15}$/', $_POST['password1']))
        {
            $error[]='The password does not match the requirements';
        }
        if($_POST['password1']!= $_POST['password2'])
        {
            $error[]='The passwords do not match';
        }
        //Email validation
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $error[]='Invalid E-mail';
        }     
      if($_POST['email']!= $_POST['email2'])
        {
            $error[]='The Emails do not match';
        }

        if ( count($error) > 0) 
        {
            foreach ($error as $output) {
               echo "{$output} <br>";
            }
        } else {
            $sent = true;
        }
    }//end isset register

?>

<?php if ($sent==false) { ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="register">
       <label>Password1</label> <input type="password" maxlength="15" name="password1" /><br>
       <label>Password2</label> <input type="password" maxlength="15" name="password2" /><br>
       <label>Email</label> <input type="text" placeholder="your@email.com" maxlength="25"  name="email" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];} ?>"/><br>
       <label>Email</label> <input type="text" placeholder="your@email.com" maxlength="25"  name="email2" value="<?php if (isset($_POST['email2'])) {echo $_POST['email2'];} ?>"/><br>
       <label>First Name</label> <input type="text" maxlength="25" name="fname" /><br>
       <label>Last Name</label> <input type="text" maxlength="25" name="lname" /><br>
       
       
        
        <input type="submit" value="Register" name="register"/>
    </form>

<?php } 
else { 
    include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST['email'];
$password = $_POST['password2'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
//if values are not empty, proceed to store them in the database
if( !empty($email) && !empty($password))
{
    mysqli_query($dbc, "INSERT INTO users(email, pw) VALUES ('$email', '$password')");
	//	echo " row  inserted, everything worked fine!";
		if( !empty($lname))
		{
			mysqli_query($dbc, "INSERT INTO users() VALUES ('$lname')");
			if( !empty($fname))
			{
				mysql
			}
		}
		
		
		include ('login.php');
		
		}else{		
			echo "ERROR: you left some values in blank!";	
		}
?>
