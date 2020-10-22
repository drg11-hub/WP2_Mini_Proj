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
    <link rel="stylesheet" href="styles.css">
    <!--<link rel="stylesheet" href="css/bootstrap-social.css">-->
    <!-- endbuild -->
</head>
<style>
.form-control {
  height: 41px;
  background: #f2f2f2;
  box-shadow: none !important;
  border: none;
}
.form-control:focus {
  background: #e2e2e2;
}
.form-control, .btn {        
  border-radius: 3px;
}
.signup-form {
  width: 400px;
  margin: 30px auto;
}
.signup-form form {
  color: #999;
  border-radius: 3px;
  margin-bottom: 15px;
  background: #fff;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  padding: 30px;
}
.signup-form h2  {
  color: #333;
  font-weight: bold;
  margin-top: 0;
}
.signup-form hr  {
  margin: 0 -30px 20px;
}    
.signup-form .form-group {
  margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
  margin-top: 3px;
}
.signup-form .row div:first-child {
  padding-right: 10px;
}
.signup-form .row div:last-child {
  padding-left: 10px;
}
.signup-form .btn {        
  font-size: 16px;
  font-weight: bold;
  background: #3598dc;
  border: none;
  min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
  background: #2389cd !important;
  outline: none;
}
.signup-form a {
  color: #fff;
  text-decoration: underline;
}
.signup-form a:hover {
  text-decoration: none;
}
.signup-form form a {
  color: #3598dc;
  text-decoration: none;
} 
.signup-form form a:hover {
  text-decoration: underline;
}
.signup-form .hint-text  {
  padding-bottom: 15px;
  text-align: center;
}
</style>

<body >
    <nav class="navbar navbar-dark navbar-inverse navbar-expand-sm fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo1.png" height="30" ></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="./menu.php"><span class="fa fa-list fa-lg"></span> Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
          </ul>
          <a class="nav-link" href="./login.php" ><span class="fa fa-sign-in" style="color:white"> Login</span></a>
        </div>
      </div>
    </nav>
    </div>
        <div class="signup-form">
            <form action="db_signup.php" method="POST">
                <center><h2>Sign Up</h2>
                <p>Please fill in this form to create an account!</p></center>
                <hr>
                <div class="form-group">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Name</label>
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="F_name" id="F_name" placeholder="First Name" required="required"></div>
                        <div class="col"><input type="text" class="form-control" name="L_name" id="L_name" placeholder="Last Name" required="required"></div>
                    </div>          
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Uname" id="Uname" placeholder="User Name" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="emailaddress" id="emailaddress" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd2" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="Mobile" id="Mobile" placeholder="Phone Number" required="required">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="DOB" id="DOB" placeholder="Date of Birth" required="required">
                </div>
                <div class="form-group">
                Gender:&nbsp;&nbsp;<input type="radio" name="radiobutton" value="Male">Male</input>&nbsp;&nbsp;
                <input type="radio" name="radiobutton" value="Female">Female</input>
                </div>
                <center>
                <div class="form-group">
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit_s" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
            </form>
          <div class="hint-text">Already have an account? <a href="./login.php">Login here</a>
        </div>
        </center>
    </div>

      <footer class="footer" style="width: 100% 100%">
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
    </footer></div>
    
    
    <!-- build:js js/main.js -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/tether/dist/js/tether.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- endbuild -->

</body>
</html>