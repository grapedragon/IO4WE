<?php
    error_reporting(-1);
	session_start();
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
					$dbemail = $row['email'];
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
                            echo " You are the Almighty Admin MUhahahahaha ";
                             header('Location: admin.php');
                            exit;
                           // echo "admin " .$dbisadmin. " ." ; 
                        }
                        else
                        {
                            //student redirect
                            echo " Oh a student fine";
                            header('Location: gamePage.php');
                            exit;
                           // echo "admin" .$dbisadmin. " . ";
                        } 
					}
		 			else 
					{		
						echo "your password is incorrect!";
					}
				}
				else
				{
					echo "your email is incorrect!";
                    echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
				}	
			}
			else
			{
				echo "Invalid credentials! If you are not registered please register bellow...";
                echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
			}
		}
		else
		{
			echo "Please Login...";	
            echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
		}
?>