<?php
	session_start();
    $user = mysql_real_escape_string($_POST['user']);
    $pass = mysql_real_escape_string($_POST['pass']);

        require_once('/connect.php');
        $query = "Select * from users where pass='{$pass}' and user='{$user}'";
        
        if( $result = mysql_query($query) )
        {
            if( mysql_num_rows($result)==0 )
                echo "Invalid email or password";
            
            else
            {
                echo "Login Successful";
				$_SESSION['in']=1;
				$_SESSION['user']=$user;                //Set the session variables now
				$_SESSION['t']=0;
				header("Location: main.php");
            }
        }
        
	
	
?>