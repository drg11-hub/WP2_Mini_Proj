<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>LAZEEZ RECIPE</title>
<style>
	body, html {
  		height: 100%;
  		margin: 0;
	}
	header{
		background-color: gold;
	}
	div{
		background-image: url("");
		background-color: gold;
		font-family: Lucida Handwriting;
	}
	.value{
		background-color: #ffb3b3;
		font-family: Lucida Handwriting;
	}
	table, th, td {
		border: 3px solid black;
		border-collapse: collapse;
		font-family: Lucida Handwriting;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		border: 5px solid green;
		margin-top: 10px;
		margin-bottom: 10px;
		margin-right: 15px;
		margin-left: 15px;
		padding-top: 5px;
		padding-right: 15px;
		padding-bottom: 15px;
		padding-left: 5px;
		overflow: hidden;
		background-color: #ffa500;
		font-family: Lucida Handwriting;
		}
	li {
		float: right;
		font-family: Lucida Handwriting;
	}
	li a{
		display: block;
		color: Red;
		text-align: center;
		padding: 16px;
		text-decoration: none;
		font-family: Lucida Handwriting;
	}
	li a:hover{
		background-color: white;
		font-family: Lucida Handwriting;
	}
	.topnav input[type=text] {
	float: right;
	padding: 8px;
	border: none;
	margin-top: 8px;
	margin-right: 16px;
	font-size: 17px;
	font-family: Lucida Handwriting;
	}
	header img{
	}
	h1,p{
		font-family: Lucida Handwriting;
	}
	
</style>
</head>
<body bgcolor="#ffb3b3">
	<div style="bgcolor='#ffb3b3'">
	<header>
			<img src="logo.png">
	</header>
	<center>
	<?php
		echo"<h2>Welcome ".$_SESSION['uname']. "!</h2>";
	?>
	<h2 align="center">Your Dashboard</h2>
	</div></center>
	<div class="topnav">
		<ul style="list-style-type:none;">
			<h2 align="left">
			  <li><a href="Logout.php">LOGOUT</a></li>
			  <li><a href="Contact Us.php">Contact Us</a></li>
			  <li><a onclick="onclick_abt()" href="#">About Us</a></li>
			  <li><a href="HOME1.php">HOME</a></li>
			  <input type="text" placeholder="Search ...">
			  <li id="demo1"></li>
			  <!--  <button type="button"><i class="fa fa-search"></i></button>  -->
			</h2>
		</ul>
	</div>
	<center>
<?php
	echo"<div class='value'>";
    echo"<br>Name : ".$_SESSION['fname']." ".$_SESSION['lname'];
    echo"<br>Email ID : ".$_SESSION['email'];
    echo"<br>Gender : ".$_SESSION['gender'];
    echo"<br>Date of Birth : ".$_SESSION['DOB'];
    echo"<br>Mobile No. : ".$_SESSION['mobile'];
    echo"<br><br>THANK YOU....!!";
    echo"<br><br>";
    echo"</div>";
?></center>
</body>
</html>

