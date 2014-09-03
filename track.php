<?php
	session_start();
	$id = mysql_real_escape_string($_POST['file']);
		require_once('/connect.php');
        $query = "Select dept From files Where fid='{$id}'";
        $r=mysql_query($query);
		if($r)
          {  echo "Tracking ....";
			$_SESSION['t']=1;
			}
			
		else
            echo "Error Occurred";
			
    $d=mysql_fetch_assoc($r);
	$_SESSION['track']=$d['dept'];
	//echo $_SESSION['track'];
	header("Location: main.php");
?>