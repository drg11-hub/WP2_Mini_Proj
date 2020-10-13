<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ristorante Con Fusion</title>
    <!-- Required meta tags always come first -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">

   <!-- build:css css/main.css -->
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="css/bootstrap-social.css">
   <!-- endbuild -->
</head>

<body>
    <nav class="navbar navbar-dark navbar-inverse navbar-expand-sm fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" height="30" width="41"></a>
        <div class="collapse navbar-collapse" id="Navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="./menu.html"><span class="fa fa-list fa-lg"></span> Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
          </ul>
          <span class="navbar-text" id="signin-button">

            <span class="fa fa-sign-in"></span> Login
          </span>
        </div>
      </div>
    </nav>
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Login </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <form class="form-inline">
                  <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword3">Password</label>
                       <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                  </div>
                  <div class="form-check">
                       <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                       </label>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary btn-sm">Sign in</button>
              </div>
          </div>
      </div>
    </div>

    <div id="reserveModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Reserve a Table</h4>
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
                    <input type="radio" name="nonsmoking" id="nonsmoking" autocomplete="off" checked>Non-Smoking
                  </label>
                  <label class="btn btn-sm btn-danger">
                    <input type="radio" name="smoking" id="smoking" autocomplete="off">Smoking
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
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col col-sm-3 align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                </div>
                <div class="col-sm-3 align-self-center">
                  <span class="btn btn-block btn-sm btn-warning" id="reserve-button">Reserve a Table</span>
                </div>
            </div>
        </div>
    </header>

  <div class="container">
     <div class="row row-content">
       <div class="col-12">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/uthappizza.png" alt="Uthappizza">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-default">$4.99</span></h2>
                    <p class="hidden-xs-down">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/buffet.png" alt="Buffet">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Weekend Grand Buffet<span class="badge badge-danger">NEW</span></h2>
                    <p class="hidden-xs-down">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/alberto.png" alt="Alberto">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Alberto Somayya</h2>
                    <h4>Executive Chef</h4>
                    <p class="hidden-xs-down">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences.</p>
                </div>
            </div>
            <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
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
            <div class="col-sm-4 col-md-3 flex-first">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col-sm col-md flex-last">
              <div class="media">
                <img class="flex-last ml-3 img-thumbnail align-self-center" src="img/buffet.png" alt="buffet">
              <div class="media-body">
                <h2 class="mt-0">Weekend Grand Buffet<span class="badge badge-danger">NEW</span></h2>
                <div class="hidden-xs-down">
                    <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                </div>
              </div>
            </div>
         </div>
    </div>



    <div class="row row-content align-items-center">
          <div class="col-sm-4 col-md-3 flex-last">
                <h3>Meet our Culinary Specialists</h3>
           </div>
           <div class="col-sm col-md flex-first">
           <div class="media">
           <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/alberto.png" alt="albertosomayya">
           <div class="media-body">
                <h2 class="mt-0">Alberto Somayya</h2>
                <h4>Executive Chef</h4>
                <div class="hidden-xs-down">
                   <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                </div>
            </div>
          </div>
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
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="./menu.html">Menu</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">confusion@food.net</a>
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
                    <p>© Copyright 2015 Ristorante Con Fusion</p>
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