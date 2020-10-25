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

<body >
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
          <li class="nav-item"><a class="nav-link" href="./Dashboard.php"><span class="fa fa-tachometer fa-lg"></span> Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="./logout.php"><span class="fa fa-sign-out fa-lg"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Upload A Recipe</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form>
                <div class="form-group row">
                  <label for="guests" class="col-sm-2 col-form-label">Number of Guests</label>
                  <div class="col-sm-8" id="guests">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"  name="guests" value="one">1
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"  name="guests" value="two">2
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"  name="guests" value="three">3
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"  name="guests" value="four">4
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"  name="guests" value="five">5
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"  name="guests" value="six">6
                    </label>
                  </div>
                  </div>
              </div>

              <div class="form-group row">
                <label for="smoke" class="col-sm-2 col-form-label">Section</label>
                <div class="col-sm-10">
                <div class="btn-group" data-toggle="buttons" name="smoke">
                  <label class="btn btn-sm btn-success active">
                    <input type="radio" name="nonsmoking" id="nonsmoking" autocomplete="off" checked>Veg
                  </label>
                  <label class="btn btn-sm btn-danger">
                    <input type="radio" name="smoking" id="smoking" autocomplete="off">Non-Veg
                  </label>
               </div>
             </div>
             </div>

             <div class="form-group row">
                   <label for="d-t" class="col-sm-2 col-form-label">Date and Time</label>
                   <div class="col-sm-4" id="d-t">
                     <div class="input-group">
                     <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                     <input type="text" class="form-control" name="d-t" placeholder="Date">
                     </div>
                   </div>
                   <div class="col-sm-4" id="d-t">
                     <div class="input-group">
                     <div class="input-group-addon"><span class="fa fa-clock-o"></span></div>
                     <input type="text" class="form-control" name="d-t" placeholder="Time">
                     </div>
                   </div>
              </div>

              <div class="form-group row">
                <div class="offset-sm-2 col-sm">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Reserve</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


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
                <div class="col-sm-3 align-self-center">
                  <span class="btn btn-block btn-sm btn-warning" id="reserve-button">Upload a Recipe</span>
                </div>
            </div>
        </div>
    </header>

  <div class="container" style="background-color: rgba(250, 249, 248,0.6);">
     <div class="row row-content " >
       <div class="col-12">
        <div id="mycarousel" class="carousel slide" data-ride="carousel" style="background-color: rgba(221, 151, 21, 0.829);color: black;">
          <div class="carousel-inner" role="listbox" style="color: black;">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/uthappizza.png" alt="Uthappizza" style="opacity: 0.8;">
                <div class="carousel-caption d-none d-md-block" >
                    <h2>Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-default"></span></h2>
                    <h4 class="hidden-xs-down" >A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/anp1.jpg" alt="Buffet">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Spring Roll Tacos<span class="badge badge-danger">NEW</span></h2>
                    <h4 class="hidden-xs-down" >Featuring mouthwatering combinations of a french Taco , with indian spices and tadka in a spring roll, crispy chicken, spring onion, scallions, green chillies, etc.</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/sounak.PNG" >
              <div class="carousel-caption d-none d-md-block" style="text-decoration-color: black;">
                  <h2>Sounak Das</h2>
                  <h4>Executive Chef</h4>
                  <p class="hidden-xs-down">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences.</p>
              </div>
          </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/dharmil.PNG" >
                <div class="carousel-caption d-none d-md-block">
                    <h2>Dharmil Gada</h2>
                    <h4>Cheif Epicurious Officer</h4>
                    <h5 class="hidden-xs-down">Our CEO,Dharmil, credits his hardworking East Asian immigrant parents who undertook the arduous journey to the shores of America with the intention of giving their children the best future.</h5>
                </div>
            </div>
            
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/bg4.png" alt="Alberto">
            <div class="carousel-caption d-none d-md-block" style="text-decoration-color: black;">
                <h2>Our Motto</h2>
                
                <h3 class="hidden-xs-down" style="color: red;">We believe in our motto 
                 <pre> <p>        "One Cannot think well,
                           Love well , Sleep well,
                              If one Has Not 
                                  <i>Dined Well</i>"</p></h3></pre>
            </div>
        </div>
            <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                    <li data-target="#mycarousel" data-slide-to="3"></li>
                    <li data-target="#mycarousel" data-slide-to="4"></li>
            </ol>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <button class="btn btn-danger btn-sm" id="carousel-button">
                	  <span id="carousel-button-icon" class="fa fa-pause"></span>
          </button>
        </div>
     </div>
  </div>





    <div class="row row-content align-items-center">
            <div class="col-sm-4  col-md-3 flex-last">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-sm col-md flex-first">
                <div class="media">
                  <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/uthappizza.png" alt="uthappizza">
                <div class="media-body">
                  <h2 class="mt-0">Uthappizza<span class="badge badge-danger">HOT</span><span class="badge badge-pill badge-default">$4.99</span></h2>
                  <div class="hidden-xs-down">
                     <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                  </div>
                </div>
                </div>
           </div>
    </div>


    
    <div class="row row-content align-items-center">
            <div class="col-sm col-md flex-first">
                  <div class="media">
                    <img class="flex-last ml-3 img-thumbnail align-self-center" src="img/anp1.jpg" height="140px" width="140px">
                  <div class="media-body">
                    <h2 class="mt-0">Weekend Special Snack<span class="badge badge-danger">NEW</span></h2>
                    <div class="hidden-xs-down">
                        <p>Featuring mouthwatering combinations of a french Taco , with indian spices and tadka in a spring roll, crispy chicken, spring onion, scallions, green chillies, etc. </p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 flex-last">
                <h3>This Week's Special</h3>
            </div>
            
    </div>



    <div class="row row-content align-items-center">
          <div class="col-sm-4 col-md-3 flex-last">
                <h3>Meet our Culinary Specialists</h3>
           </div>
           <div class="col-sm col-md flex-first">
           <div class="media">
           <img class="d-flex mr-3 img-thumbnail align-self-center " src="img/sounak.PNG" height="140px" width="140px">
           <div class="media-body">
                <h2 class="mt-0">Sounak Das</h2>
                <h4>Executive Chef</h4>
                <div class="hidden-xs-down">
                   <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                </div>
            </div>
          </div>
    </div>

       </div>
       <div class="row row-content align-items-center">
        
         <div class="col-sm col-md flex-first">
         <div class="media">
         <img class="d-flex mr-3 img-thumbnail align-self-center " src="img/dharmil.PNG" height="140px" width="140px">
         <div class="media-body">
              <h2 class="mt-0">Dharmil Gada</h2>
              <h4>Cheif Epicurious Officer</h4>
              <div class="hidden-xs-down">
                 <p>Our CEO,Dharmil, credits his hardworking East Asian immigrant parents who undertook the arduous journey to the shores of America with the intention of giving their children the best future.</p>
              </div>
          </div>
        </div>
  </div>
    <div class="col-sm-4 col-md-3 flex-last">
          <h3>Where It Started</h3>
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

</php>
