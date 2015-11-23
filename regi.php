<?php
<<<<<<< HEAD

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
    mysqli_query($dbc, "INSERT INTO users(email, pw) VALUES ('$email', '$password')");
		echo " row  inserted, everything worked fine!";	
		}else{		
			echo "ERROR: you left some values in blank!";	
=======
    error_reporting(0);
    include("connection.php");
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];
    $query = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$login_email."'");
    $numrows = mysqli_num_rows($query);
	if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if($numrows != 0)
			{
				while($row = mysqli_fetch_array($query))
				{
					$dbemail = $row['email']; //must matching with the field name in your database table;
					$dbpass = $row['pw'];
					$dbfirstname = $row['first_name'];
                    $dbisadmin = $row['isadmin'];
         				
				}	
				if($login_email==$dbemail)
				{
					if($login_password==$dbpass)
					{
						//Successfull login -  check for admin
                        session_start();
                        if($dbisadmin === '1')
                        {
                            //admin redirect
                            //alex you need to write where you want the admin to go
                            echo " You are the Almighty Admin MUhahahahaha ";
                            $_SESSION["isadmin"] = true;
                            $_SESSION["email"] = $dbemail;
                            // header('Location: admin.html');
                            exit;
                           // echo "admin " .$dbisadmin. " ." ; 
                        }
                        else
                        {
                            //student redirect
                            echo " Oh a student fine";
                            header('Location: gamePage.html');
                             $_SESSION["isadmin"] = false;
                            $_SESSION["email"] = $dbemail;
                            exit;
                           // echo "admin" .$dbisadmin. " . ";
                        }
                        
                        
					}
		 			else 
					{		
						echo "your password is incorrect!";
						//echo "hey there";
                       // echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
					}
				}
				else
				{
					echo "your email is incorrect!";
					echo "email poop";
                    echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
				}	
			}
			else
			{
				echo "Invalid credentials! If you are not registered please register bellow...";
                echo "hellow there";
                echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
			}
		}
		else
		{
			echo "Please Login...";	
			echo "last echo";
            echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
>>>>>>> a7adc5b0ddb3ee5671a4b30ad89d5c7063702779
		}
?>
