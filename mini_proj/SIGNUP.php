<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
		body, html {
			  height: 100%;
			  margin: 0;
		}
		div{
		background-image: url("login_n_signup.jpg");
		height: 100%;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size:  100% 80%;
		}
		header img{
		}
		img{
			width=100%;
		}
	</style>
</head>
<body>
	<script>
		
		/*function validate_F_name(){
			if(document.Signup.F_name.value == "" || isNaN(document.Signup.F_name.value)==false ){
				alert("Please Provide Your First Name");
				document.Signup.F_name.focus() ;
			}
		}

		function validate_L_name() {
			if(document.Signup.L_name.value == "" || isNaN(document.Signup.L_name.value)==false){
				alert("Please Provide Your Last Name");
				document.Signup.L_name.focus() ;
			}
		}
		
		function validate_email() {
			var email = document.getElementById('emailaddress');
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if ( document.Signup.emailaddress.value == ""  || !document.Signup.emailaddress.value.match(filter)) {
				alert('Please provide a valid Email.');
				document.Signup.emailaddress.focus();
			}
		}
		
		function validate_DOB(){
			if (!document.Signup.DOB.value.match(/^\d{1,2}\/\d{1,2}\/\d{4}$/)) {
        		alert('Please enter your valid Date Of Birth.');
				document.Signup.DOB.focus();    		
			}
			var today = new Date();
    		if (today <= document.Signup.DOB.value) {
        		alert("Current or future date is not allowed.");
				document.Signup.DOB.focus(); 
			}
		}
		
		function validate_Mobile(){
			var m_check = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
			if(!document.Signup.Mobile.value.match(m_check)){
				alert("Please provide Your valid Mobile Number.");
				document.Signup.Mobile.focus();
			}
		}*/
	</script>
	<header>
	<center>
	<img src="logo.png">
	</center>
	</header>
	<div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 align="center">Enter your Details.</h1>
	<form name='Signup' align="center" action="cookiesession.php" method="POST">
		Name: <input type="text" name="F_name" placeholder="First Name" onchange="validate_F_name()" required></input>
		<input type="text" name="L_name" placeholder="Last Name" onchange="validate_L_name()" required></input><br><br>

		User Name:<input type="text" name="Uname"><br><br>
		
		Password: <input type="Password" name="pwd1" title="Password should be of 8 characters. It must contain a special character, at least one number and one uppercase and lowercase letter"><br><br></input>

		Password: <input type="Password" name="pwd2" title="Confirm Password"><br><br></input>
		
		Date Of Birth: <input type="date" name="DOB" onchange="validate_DOB()" required></input><br><br>

		Gender: <input type="radio" name="radiobutton" value="Male">Male</input>
		<input type="radio" name="radiobutton" value="Female">Female</input><br><br>

		Email: <input type="email" name="emailaddress" onchange="validate_email()"><br><br>

		Phone Number: <input type="Number" name="Mobile" onchange="validate_Mobile()" placeholder="Enter Your Mobile Number" required></input><hr>
		
		<p>By Creating an Account you agree our <a href="Terms and Conditions.html">Terms and Conditions</a></p><hr>
		<input type="reset" name="Submit2" value="Reset" />&nbsp <INPUT TYPE="SUBMIT" onclick="alert_signup()" name="submit_s"> <hr>
		<p>Already Registered? <a href="Login.php">LOGIN</a></p>
		<!--<marquee behavior="alternate">
		<audio controls>
		<source src="horse.ogg" controls="controls">
		</audio><br>
		<video width="320" height="240" controls autoplay >
			<source src="video1.mp4" type="video/mp4">
		</video>
		<video width="320" height="240" controls autoplay>
			<source src="video2.mp4" type="video/mp4">
		</video>
		</marquee>-->
	</form>
</div>

<?php

?>
</body>
</html>