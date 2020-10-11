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
		background-size: 100% 100%;
		}
		header img{
		}
		img{
			width=100%;
		}
	</style>
</head>
<body bgcolor="darkorchid">
	<header>
	<center>
	<img src="logo.png">
	</center>
	</header>
	<div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 align="center">Logout form Your Account.</h1>
	<!--<form align="center" action="HOME.php" method="POST">
		<INPUT TYPE="SUBMIT" name="submit_o">
		<hr>
		<p>Sign-Up with new Account! <a href="Signup.php">SIGNUP</a></p>
	</form>-->
	</div>

<?php
	setcookie('mail',"",time()-(86400),"/");
	setcookie('uname',$uname,time()-(86400),"/");
	header ('Location: HOME.php');
?>
</body>
</html>