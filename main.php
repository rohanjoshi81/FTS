<?php
session_start();
require('header.php');
if(!isset($_SESSION['in']))
header('Location: index.php ') or die (' Not Logged In ! ');
	
?>
<html>
	<head>
		<title>	
		</title>
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="css/login.css" >
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
		<style>
		@font-face{
				font-family:"ubu";
				src: url('font/ubu/ubu-webfont.eot') format('embedded-opentype'), /* IE6-IE8 */
				url('font/ubu/ubu-webfont.woff') format('woff'), /* Modern Browsers */
				url('font/ubu/ubu-webfont.ttf')  format('truetype'), /* Safari, Android, iOS */
				url('font/ubu/ubu-webfont.svg#svgFontName') format('svg'); /* Legacy iOS */
				  }
		
		</style>
		<script>
			 $(document).ready(function()
			 {
			 $("#create").click(function(){
			 $("#createfile").slideToggle("slow");
				$("#tr").html("");
				$("#dispatchfile").css({'display': 'none'});
				$("#trackfile").css({'display': 'none'});
			 });
			 $("#dispatch").click(function(){
			 $("#dispatchfile").slideToggle("slow");
				$("#tr").html("");
				$("#createfile").css({'display': 'none'});
				$("#trackfile").css({'display': 'none'});
			 });
			 $("#track").click(function(){
			 $("#trackfile").slideToggle("slow");
			 $("#dispatchfile").css({'display': 'none'});
			 $("#createfile").css({'display': 'none'});
			 });
			 
				
			 });
		</script>
	</head>
	<body>
	<?php
		require_once('/connect.php');
		$u=$_SESSION['user'];
		echo ' Welcome to FTS'.'</br>Hello , '. $u .'</br>';
		$q= "select dept from users where user='{$u}'";
		$r=mysql_query($q);
		if($r){
			$d = mysql_fetch_assoc($r);
			$dept=$d['dept'];
			echo  $dept.' Department ';
			}
		$_SESSION['dept']=$dept;
	?>
		<div id='logout'>
			<a id="editButton"><img src='images/settings.png' alt='Settings' ></a>
			<a href="logout.php"><img src='images/logout.png' alt='Logout' ></a>
		</div>
		<div id="maske">
		</div>
		<div id="edit">
				<img id="closee" src="images/close.png" />
				<div id="editForm">
					<form action='changepwd.php' method='POST'>
						<input name="chpass" type="password" placeholder="Enter your new password" />
						<input type="submit" value="Change" >
					</form>
				</div>
		</div><br/><br/>
		<div id="mainwork" style="">
			<input type="button" id="create" value="Create File" />
			<form id="createfile" style="display:none;float:right;padding-right:150px;" action="create.php" method="POST">
				<input name="fid" type="text" placeholder="Enter file ID" /><br/>
				<input name="fname" type="text" placeholder="Enter file name" /><br/>
				<textarea name="frem" placeholder="Enter remarks" rows='5' cols='25'></textarea><br/>
				<input type="submit" value="Create" />
			</form><br/><br/>
			<input type="button" id="dispatch" value="Dispatch File" />
			<form id="dispatchfile" style="display:none;float:right;padding-right:290px;" action="dispatch.php" method="POST" >
				<select name="file" style="color:gray;">	
					<option value="" selected style="color: grey;">Select file</option>
					<?php
					require_once('/connect.php');
					$query = "Select * from files where dept='{$_SESSION['dept']}' ";
					$result=mysql_query($query);
					//echo "a";
					//$z=mysql_fetch_assoc($result);
					//echo $z['fid'];
					while( $row = mysql_fetch_array($result) ){
						$f = $row["fid"];
						echo "<option>";
						echo htmlspecialchars($f);
						echo "</option>";
						}
					?>
				</select>
				<br/>
				<select name="dept" style="color:gray;">
					<option value="" selected style="color: grey;">Select department</option>
					<option value="Technical" > Technical </option>
					<option value="Logistics" > Logistics </option>
					<option value="HR" > HR </option>
				</select><br/>
				<input type="submit" value="Dispatch" />
			</form><br/><br/>
			<input type="button" id="track" value="Track File" />
			<form id="trackfile" style="display:none;float:right;padding-right:290px;" action="track.php" method="POST" >
				<select name="file" style="color:gray;">	
					<option value="" selected style="color: grey;">Select file</option>
					<?php
					require_once('/connect.php');
					$query = "Select * from files where creator='{$_SESSION['dept']}' ";
					$result=mysql_query($query);
					//echo "a";
					//$z=mysql_fetch_assoc($result);
					//echo $z['fid'];
					while( $row = mysql_fetch_array($result) ){
						$f = $row["fid"];
						echo "<option>";
						echo htmlspecialchars($f);
						echo "</option>";
						}
					?>
				</select>
				<br/>
				<input type="submit" value="Track" />
			</form><br/><br/>
			<p id="tr" style="{padding-left:150px;}">
			<?php 
				if($_SESSION['t']==1)
				{echo "File Tracked at : ".$_SESSION['track'];
				$_SESSION['t']=0;
				}
			?>
			</p>
		</div>
	</body>
</html>	