<?php
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
                        
                        if($dbisadmin === '1')
                        {
                            //admin redirect
                            //alex you need to write where you want the admin to go
                            echo " You are the Almighty Admin MUhahahahaha ";
                             header('Location: admin.html');
                            exit;
                           // echo "admin " .$dbisadmin. " ." ; 
                        }
                        else
                        {
                            //student redirect
                            echo " Oh a student fine";
                            header('Location: gamePage.html');
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
		}
?>
