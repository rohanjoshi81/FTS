<?php
	session_start();
	$id = mysql_real_escape_string($_POST['file']);
    $d = mysql_real_escape_string($_POST['dept']);
       
		require_once('/connect.php');
        $query = "Update files Set dept='{$d}' Where fid='{$id}'";
        if(mysql_query($query))
            echo "Successfully Dispatched";
        else
            echo "Error Occurred";
    
	header("Location: main.php");
?>