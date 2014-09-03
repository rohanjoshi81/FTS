// Login JavaScript Document
$(document).ready(function() {
	
	function showSignIn()
	{
		$("#mask").fadeIn();
		$("#signIn").fadeIn();
	}

	function hideSignIn()
	{
		$("#signIn").fadeOut();
		$("#mask").fadeOut();wait

	}
	
	function showLogin()
	{
		$("#loginButton").css("border-bottom-color" , "#662d91");
		$("#registerButton").css("border-bottom-color" , "#000000");
		$("#registerForm").hide();
		$("#loginForm").show();
	}
	
	function showRegister()
	{
		$("#loginButton").css("border-bottom-color" , "#000000");
		$("#registerButton").css("border-bottom-color" , "#662d91");
		$("#loginForm").hide();
		$("#registerForm").show();
	}
	
	
	function showEdit()
	{
		$("#maske").fadeIn();
		$("#edit").fadeIn();
	}
	
	function hideEdit()
	{
		$("#edit").fadeOut();
		$("#maske").fadeOut();
	}
	
	$("#headerLogin").click(function() {
		showLogin();
		showSignIn();
	});
	
	$("#loginButton").click(function() {
		showLogin();
	})
	
	$("#headerRegister").click(function() {
		showRegister();
		showSignIn();
	});
	
	$("#registerButton").click(function() {
		showRegister();
	});
	
	$("#close ,#mask").click(function() {
		hideSignIn();
	});
	
	$("#closee ,#maske").click(function() {
		hideEdit();
	});
	
	$("#editButton").click(function() {
		showEdit();
	});
	
	
	
    
  /*  $("#registerForm").submit(function(){
        
        $.ajax({
            type: "POST",
            url: "register.php",
            data: $("#registerForm").serialize(),
            success: function(data) {
                document.getElementById("registerStatus").innerHTML = data;
            },
            dataType: "text"
        });
        
        return false;
        
    });
    
    $("#loginForm").submit(function(){
        
        $.ajax({
            type: "POST",
            url: "login.php",
            data: $("#loginForm").serialize(),
            success: function(data) {
                document.getElementById("loginStatus").innerHTML = data;
            },
            dataType: "text"
        });
        
        return false;
        
    }); */
	
});