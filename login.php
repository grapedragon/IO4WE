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
         				
				}	
				if($login_email==$dbemail)
				{
					if($login_password==$dbpass)
					{
						echo "Welcome ".$dbfirstname.", you are in the wonderland!";
                        include("navbar.php");
					}
		 			else 
					{		
						echo "your password is incorrect!";
						echo "hey there";
                        echo "USER ".$dbemail." ".$login_email." PASS ".$dbpass." ".$login_password.".";
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
