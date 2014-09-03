<?php
	session_start();
	$user=$_SESSION['user'];
    $pass = mysql_real_escape_string($_POST['chpass']);

   // check here for existing user
    
		require_once('/connect.php');
        $query = "UPDATE users SET pass='{$pass}' WHERE user='{$user}'";
        if(mysql_query($query))
            echo "Successfully Registered";
        else
            echo "Error Occurred";
    
	header("Location: main.php");
?>