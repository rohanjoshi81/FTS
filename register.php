<?php
	
    $user = mysql_real_escape_string($_POST['user']);
    $pass = mysql_real_escape_string($_POST['pass']);
    $dept = mysql_real_escape_string($_POST['dept']);

   // check here for existing user
    
  
        require_once('/connect.php');
        $query = "Insert into users values('','$user','$pass','$dept',CURRENT_TIMESTAMP)";
        if(mysql_query($query))
            echo "Successfully Registered";
        else
            echo "Error Occurred";
    
	header("Location: main.php");
?>