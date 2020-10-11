<!DOCTYPE html>
<html>
<head>
<title>LAZEEZ RECIPE</title>
<style>
	body, html {
  		height: 100%;
  		margin: 0;
	}
	div{
		background-image: url("home_bg.jpg");
		height: 100%;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size:  cover;
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
		background-color: #f0f0f0;
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
	img{
		width=100%;
	}
	@media screen and (max-width: 600px) {
		.topnav a, .topnav input[type=text] {
			float: none;
			display: block;
			text-align: left;
			width: 100%;
			margin: 0;
			padding: 14px;
		}
		.topnav input[type=text] {
			border: 1px solid #ccc;
		}
	}
</style>
</head>
<body bgcolor="gold" onload="load_alert()">
	<script>
		/*function load_alert() 
        {
            alert("You are now Viewing Lazeez Recipes Official Page!");
		}*/
		
		function onclick_abt(){
			document.getElementById("demo1").innerHTML = "<span style='color: white;'>A little history of how we started Simply Recipes was founded by Elise Bauer in 2003 as a blog to keep track of the recipes she was learning to cook from her parents in Sacramento, California. Elise had been a busy Silicon Valley executive when in 2001 she became sick with a flu that wouldn’t go away. In 2003 Elise moved home with her parents to help recover. Elise lived with her parents for several years, recovering from chronic fatigue and documenting her parents’ cooking on Simply Recipes. (Here’s more of that story.) Over the years, what started as a small blog grew to reach millions of readers every month! In 2016 Simply Recipes joined forces with Fexy Media, a Seattle-based media company who also owns Serious Eats and Road Food. (See the announcement.)</span>";
		}


	</script>
	<header>
			<img src="logo.png">
	</header>
	<h1 align="center">Welcome!!</h1>
	<p align="center">“If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.”<br><br>
	“Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious.”</p>
		<div class="topnav">
			<ul style="list-style-type:none;">
				<h2 align="left">
				  <li><a href="Signup.php">SIGNUP</a></li>
				  <li><a href="Login.php">LOGIN</a></li>
				  <li><a href="Contact Us.php">Contact Us</a></li>
				  <li><a onclick="onclick_abt()" href="#">About Us</a></li>
				  <input type="text" placeholder="Search ...">
				  <li id="demo1"></li>
				  <!--  <button type="button"><i class="fa fa-search"></i></button>  -->
				</h2>
			</ul>
			<center>
			<table style="width:30%" cellspacing=50 cellpadding=20>
			<caption style="color:blue"><h2>Browse</h2></caption>
			<tr style="color:red">
				<th>Meal Type</th>
				<th>Ingredient</th>
				<th>Diet and Health</th>
			</tr>
			<tr style="color:cyan">
				<th><a href="Appetizers and Snacks.php" >Appetizers &amp; Snacks</a></th>
				<th><a href="Pasta.php">Pasta</a></th></th>
				<th><a href="Low Calorie.php"> Low Calorie</a></th></th>
			</tr>
			</center>
		</div>
	<marquee behavior="scroll" direction="left">
		<img src="bg4.png" width="300" height="250" alt="Natural" />
		<img src="bg1.jpg" width="300" height="250" alt="Natural" />
		<img src="bg2.jpg" width="300" height="250" alt="Natural" />
		<img src="bg3.jpg" width="300" height="250" alt="Natural" />
	</marquee>

<?php

//For Post:

//For Login:

if (isset($_POST["submit_s"])){
	$input_name = $_POST['input_name'];
	$input_pwd = $_POST['input_pwd'];
	echo "<script>alert('Logged in Successfully! Welcome $uname')</script>";
}

?>
</body>
</html>