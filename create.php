<?php
	session_start();
	$id = mysql_real_escape_string($_POST['fid']);
    $name = mysql_real_escape_string($_POST['fname']);
    $rem = mysql_real_escape_string($_POST['frem']);
	$dept=$_SESSION['dept'];
   // check here for existing user
    
  
        require_once('/connect.php');
        $query = "Insert into files values('$id','$name','$rem','$dept','$dept',CURRENT_TIMESTAMP,'')";
        if(mysql_query($query))
            echo "Successfully Created";
        else
            echo "Error Occurred";
    
	header("Location: main.php");
?>