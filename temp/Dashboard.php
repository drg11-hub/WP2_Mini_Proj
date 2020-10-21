<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lazeez Recipes</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard_styles.css">
    <!--<link rel="stylesheet" href="css/bootstrap-social.css">-->
    <!-- endbuild -->
</head>

<body background-color: white;>
    <nav class="navbar navbar-dark navbar-inverse navbar-expand-sm fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo1.png" height="30" ></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="./menu.php"><span class="fa fa-list fa-lg"></span> Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
          </ul>
          <ul class="navbar-nav ml">
          <li class="nav-item"><a class="nav-link" href="./logout.php"><span class="fa fa-sign-out fa-lg"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <center>
	<?php
		echo"<h2>Welcome ".$_SESSION['uname']. "!</h2>";
	?>
	<h2 align="center">Your Dashboard</h2><hr>
    
    <?php
        echo"<div class='value' align='left'>";
        echo"<br>Name:<br> First Name: ".$_SESSION['fname']."&nbsp;&nbsp;&nbsp;&nbsp;Last Name: ".$_SESSION['lname'];
        echo"<br>Email ID : ".$_SESSION['email'];
        echo"<br>Gender : ".$_SESSION['gender'];
        echo"<br>Date of Birth : ".$_SESSION['DOB'];
        echo"<br>Mobile No. : ".$_SESSION['mobile'];
        echo"<br><br>THANK YOU....!!";
        echo"<br><br>";
        echo"</div>";
    ?></center>

      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-5 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.php">About</a></li>
                        <li><a href="./menu.php">Menu</a></li>
                        <li><a href="contactus.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              999, Lazeez HeadQuarters<br>
		              Juhu Beach<br>
		              MUMBAI<br>
		              <i class="fa fa-phone fa-lg"></i>: +91 838 104 2664<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:lazeez@food.net">lazeez@food.net</a>
		           </address>
                </div>
                <div class="col col-sm-4 align-self-center">
                    <div style="text-align:center">
                        <a class= "btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class= "btn btn-social-icon btn-facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a class= "btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class= "btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class= "btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class= "btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2020 Lazeez Recipes</p>
                </div>
           </div>
        </div>
    </footer>
    
    
    <!-- build:js js/main.js -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/tether/dist/js/tether.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- endbuild -->

</body>
</html>

