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
        
        <input type="submit" value="Register" name="register"/>
    </form>

<?php } 
else { 
    include('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_POST['email'];
$password = $_POST['password2'];
//if values are not empty, proceed to store them in the database
if( !empty($email) && !empty($password))
{
    mysqli_query($dbc, "INSERT INTO user1(email, pw) VALUES ('$email', '$password')");
		echo " row  inserted, everything worked fine!";	
		}else{		
			echo "ERROR: you left some values in blank!";	
		}
	}else{
	echo "<strong>Please complete the form...</strong>";
} } ?>