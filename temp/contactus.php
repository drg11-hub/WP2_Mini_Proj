<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link href="styles.css" rel="stylesheet">
    <!-- endbuild -->

    <title>Lazeez Recipes</title>

</head>

<body>
  <nav class="navbar navbar-dark navbar-inverse navbar-expand-sm fixed-top">        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="./index.php"><img src="img/logo1.png" height="30" ></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span>About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./menu.php"><span class="fa fa-list fa-lg"></span>Menu</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span>Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
      <div class="container">
          <div class="row row-header">
              <div class="col-12 col-sm-6">
                  <h1>Lazeez Recipes</h1>
                  <p>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.<br>
                    Pull up a chair. Take a taste. Come join us. Life is so endlessly delicious.</p>
                </div>
              <div class="col col-sm-3 align-self-center">
                  <img src="img/logo1.png" class="img-fluid">
              </div>
          </div>
      </div>
  </header>

    <div class="container" style="background-color: rgba(250, 249, 248,0.7);">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row justify-content-center">
           <div class="col-12 col-sm-4">
              <h4>Visit Us At:</h4>
           </div>
            <div class="col-12 col-sm-4">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
                      999, Lazeez HeadQuarters<br>
                      Juhu Beach<br>
                      MUMBAI<br>
		              <i class="fa fa-phone"></i>: +91 838 104 2664<br>
		             
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:lazeez@food.net">lazeez@food.net</a>
		           </address>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-4">
                <h4>Or Reach Us At:</h4>
            </div>
            <div class="col-12 col-sm-4">
                <div class="btn-group" role="group">
                  <a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i>Call</a>
                  <a role="button" class="btn btn-info"><i class="fa fa-skype"></i>Skype</a>
                  <a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i>Email</a>
                </div>
            </div>
        </div>
        <hr>
    

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
              <form>
                <div class="form-group row">
                  <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                  <div class="col-5 col-sm-4 col-md-3">
                    <div class="input-group">
                      <div class="input-group-addon"></div>
                      <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                      <div class="input-group-addon"></div>
                    </div>
                  </div>
                  <div class="col-7 col-sm-6 col-md-7">
                    <input type="tel" class="form-control" id="telno" name="telno" placeholder="Tel No.">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="emailid" class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                       <div class="form-check col-md-6 offset-md-2">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="approve" value="">
                                <strong>May we contact you?</strong>
                            </label>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                  <label for="feedback" class="col-md-2 col-form-label">Your feedback</label>
                  <div class="col-md-10">
                    <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-md-2 col-md-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>

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
