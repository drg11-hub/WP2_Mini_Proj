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
		background-size:  100% 100%;
		}
		header img{
		}
		img{
			width=100%;
		}
	</style>
</head>
<?php
	//echo "<script>alert('Welcome, $_SESSION['uname'	]!\n')</script><br>Please login to continue.";
?>
<body bgcolor="darkorchid">
	<header>
	<center>
	<img src="logo.png">
	</center>
	</header>
	<div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>
	<?php
		echo"<h2>Welcome ".$_SESSION['uname']. "!</h2>";
		echo"<h4>Please Login to continue</h4>";
	?></center>
	<!--<h1 align="center">Login to Your Account.</h1>-->
	<form align="center" action="HOME1.php" method="POST">
	<!--	<form align="center" action="cookiesession.php" method="POST">   -->
		User Name :<input type="text" name="input_name">
		<br><br>
		Password :<input type="Password" name="input_pwd">
		<br><br>
		<INPUT TYPE="SUBMIT" name="submit_l">
		<hr>
		<p>Forgot Password - <a href="#">Click Here</a></p>
		<hr>
		<p>Sign-Up with new Account! <a href="Signup.php">SIGNUP</a></p>
	</form>
	</div>

<?php
?>
</body>
</html>