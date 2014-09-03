<!--  a 1337 c0d3 -->
<?php
require('header.php');
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
		</style>
	</head>
	<body>
		<div id="login">
			<a id="headerLogin">Login</a> | <a id="headerRegister">Register</a>
		</div>
		<div id="mask">
    </div>
    
    <div id="signIn">
    	<img id="close" src="images/close.png" />
    	<div>
        	<a id="loginButton">Login</a>
            <a id="registerButton">Register</a>
        </div>
        <div>
        	<form id="loginForm" action="login.php" method="POST">
                <input name="user" type="text" placeholder="Enter your username" />
                <input name="pass" type="password" placeholder="Enter your password" />
                <input type="submit" value="Login" /><br/>
                <a>Lost your password ?</a>
                <p id="loginStatus"></p>
            </form>
            <form id="registerForm" action="register.php">
            	<input name="user" type="text" placeholder="Enter your username" />
				<br>
            	<select name="dept" style="color:gray;">
					<option value="" selected style="color: grey;">Select your department</option>
					<option value="Technical" > Technical </option>
					<option value="Logistics" > Logistics </option>
					<option value="HR" > HR </option>
				</select>
				<br>	
                <input name="pass" type="password" placeholder="Enter your password" />
                <input type="submit" value="Register" />
                <p id="registerStatus"></p>
            </form>
        </div>
    </div>
	<div id="mimg"><img src="images/main.png" alt="Track 'em all" >
	<p>
		<ul>
			<li>Easy File Tracking</li>
			<li>Restricted Access</li>
			<li>Person Independent Processes</li>
			<li>Senior Management Control</li>
			<li>Web Access Manager</li>
		</ul>
	</p>
	</body>
</html>
