<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
		body, html {
			  height: 100%;
			  margin: 0;
		}
	</style>
</head>
<body bgcolor="">
	<script>
		function bigImg(x) {
			x.style.height = "250px";
			x.style.width = "250px";
		}

		function normalImg(x) {
			x.style.height = "100px";
			x.style.width = "100px";
		}

	</script>
	<header>
	<center>
	<img src="logo.png">
	</center>
	</header>
	<h1 align="center">Appetizers And Snacks!</h1>
	<div>
		<center>
		<img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="anp1.jpg" alt="Mountains" style="width:100px;height:100px">
		<img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="anp2.jpg" alt="Mountains" style="width:100px;height:100px">
		<img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="anp3.jpg" alt="Mountains" style="width:100px;height:100px">
		<img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="anp4.jpg" alt="Mountains" style="width:100px;height:100px">
	</center>
		<br><br>
	<!--	<video width="320" height="240" autoplay>
			<source src="https://youtu.be/WhzwcVTYGvY" type="video/mp4">
		</video>  -->
	<!--	<iframe width="420" height="315"
			src="https://youtu.be/9kxmWv1AV5I">
		</iframe>  -->
		<iframe width="560" height="315" 
		src="https://www.youtube.com/embed/9kxmWv1AV5I" frameborder="0" 
		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
	</div>
</body>
</html>