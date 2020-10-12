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
		background-image: url("pasta_bg.jpg");
		height: 200%;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size:  100% 100%;
		}
		header img{
		}
		img{
			width=50%;
		}
	</style>
</head>
<body bgcolor='cyan'>
	<script>
		function pasta_event1(){
			document.getElementById("demo2").innerHTML = "<span style='color: red;'>This white sauce is also known as béchamel sauce and has it's origin in French cuisine. Classic béchamel sauce is made with butter, flour and milk. For this pasta, I add cream and this pasta is super cheesy and creamy, just like my family likes it. So this sauce is kind of a mix between alfredo and béchamel.</span>";
		}
	</script>
	<header>
	<center>
	<img src="logo.png">
	</center>
	</header>
	<h1 align="center">Pasta!</h1>
	<div> 
		<form>
		<ol>
			<li><p>Veg Macornii Pasta Recipe (INDIAN STYLE) </li>
			<img src="pasta img.jpg" ondblclick="pasta_event1()" width="300" height="250" alt="Natural" /><br>
			<a href="pasta recipe 1.php">View Recipe</a></p><br>
			<p id="demo2"></p>
		</ol>
		</form>
	</div>
</body>
</html>

<!-- <button onclick="playPause()">Play/Pause</button> 
	  <button onclick="makeBig()">Big</button>
	  <button onclick="makeSmall()">Small</button>
	  <button onclick="makeNormal()">Normal</button>
	  <br><br>
  <video id="video1" width="420"> -->
  <!--	<iframe width="420" height="315"
			src="https://youtu.be/9kxmWv1AV5I">
		</iframe>  -->

<!-- <script> 
	var myVideo = document.getElementById("video1"); 

	function playPause() { 
	  if (myVideo.paused) 
		myVideo.play(); 
	  else 
		myVideo.pause(); 
	} 

	function makeBig() { 
		myVideo.width = 560; 
	} 

	function makeSmall() { 
		myVideo.width = 320; 
	} 

	function makeNormal() { 
		myVideo.width = 420; 
	} 
	</script>  -->