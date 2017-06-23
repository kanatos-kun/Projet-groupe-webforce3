<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Page d'accueil</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
    <!-- <script type="text/javascript" src="assets/js/facebook_SDK.js"></script> -->


          
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        


        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                           <h2>Le premier reseau social du web</h2>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <h1>
                                        <a href="#">Wolfo</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="#">Accueil</a></li>
                                        <li><a href="#contact">Contact</a></li>  
                                        <li><a href="#A propos">A propos</a></li>
                                        <li><a href="#connexion">Connexion</a></li>
                                       
                                                                     
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
            <p></p>
            <p></p>
            <p></p>
           
             <div id="id01" class="modal id1">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content animate" action="action_inscription.php" method="POST">
        <div class="container">
          <label for="email"><b>Email</b></label>
          <input type="mail" id="email" placeholder="Enter Email" name="email" required>

          <label for="email-repeat"><b>Repeat Email</b></label>
          <input type="mail" placeholder="Enter Email" name="email-repeat" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

          <label><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          <input type="checkbox" checked="checked"> Remember me
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <div class="clearfix">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div> 
    
    <!-- The Modal -->
    <div id="id02" class="modal id2">
      <span onclick="document.getElementById('id02').style.display='none'"
    class="close" title="Close Modal">&times;</span>

      <!-- Modal Content -->
      <form class="modal-content animate" action="action_connexion.php" method="POST">

        <div class="container">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn-2">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div> 
 


            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">

                        <ul class="slides">
                            <li>
                                <div class="overlay"></div>
                                <img src="images/slide.jpg" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                     <!-- The Modal (contains the Sign Up form) -->
                                      <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

     <!-- Button to open the modal login form -->
   

                                      <button onclick="document.getElementById('id02').style.display='block'">Login</button>
                                     
 
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img src="images/slide4.jpg" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                    <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
                                    <button onclick="document.getElementById('id02').style.display='block'">Login</button>
                                    
 
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img src="images/slide5.jpg" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                     <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
                                     <button onclick="document.getElementById('id02').style.display='block'">Login</button>
                                     
 
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->


        <div class="content-section" id="pub-appli">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Notre futur appli mobile bientôt dans votre poche !</h2>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                    <p>Image 1</p>
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                    <p>Image 2</p>
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                      <p>Image 3</p>  
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                       <p>Image 4</p>
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#services -->

         <div class="content-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Nos services</h2>
                        
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-1">
                            <div class="service-icon">
                                <i class="fa fa-file-code-o"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                   <h3>Mise en relation</h3>
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-2">
                            <div class="service-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                   <h3>Recherche de stage</h3>
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-3">
                            <div class="service-icon">
                                <i class="fa fa-institution"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                   <h3>Cv en ligne</h3>
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item" id="service-4">
                            <div class="service-icon">
                                <i class="fa fa-flask"></i>
                            </div> <!-- /.service-icon -->
                            <div class="service-content">
                                <div class="inner-service">
                                   <h3>Service de messagerie</h3>
                                   
                                </div>
                            </div> <!-- /.service-content -->
                        </div> <!-- /#service-1 -->
                    </div> <!-- /.col-md-3 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#services -->

         
          <div class="content-section" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Nos derniers membres</h2>
                        
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Jean didier</h3>
                               
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Jean kevin</h3>
                               
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Jean claude</h3>
                                
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Bonobo</h3>
                               
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Didier</h3>
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Polo</h3>
                               
                                
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Jacqouille</h3>
                               
                              
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                    <div class="portfolio-item col-md-3 col-sm-6">
                        <div class="portfolio-thumb">
                            <img src="images/c.jpg" alt="">
                            <div class="portfolio-overlay">
                                <h3>Pat</h3>
                               
                            </div> <!-- /.portfolio-overlay -->
                        </div> <!-- /.portfolio-thumb -->
                    </div> <!-- /.portfolio-item -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#portfolio -->


        <div class="content-section" id="where">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Ou somme nous ?</h2>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2680.1483281708856!2d3.5830680160356954!3d47.79796037919774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee4f459f5d2225%3A0xfd97afddd0280922!2sWebForce+3+Bourgogne+Barthe+SAS!5e0!3m2!1sfr!2sfr!4v1497363439249" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#services -->
        </div>  



        <div class="content-section" id="pub">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                    <button onclick="document.getElementById('id01').style.display='block'">Sign up</button>
                    <button onclick="document.getElementById('id02').style.display='block'">Login</button>
                      



                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.pub -->
       
           <div id="footer">

        <footer class="footer-distributed">

            <div class="footer-right">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

            <div class="footer-left">

                <p class="footer-links">
                    <a href="#">Accueil</a>
                    --
                    <a href="#">Forum</a>
                    --
                    <a href="#">Avantages premium</a>
                    --
                    <a href="#">A propos</a>
                    --
                    <a href="#">Contact</a>
                </p>

            </div>

        </footer>
      <div class="container">
    <div class="col-sm-6">
        <p>Mentions légales</p>
    </div>
    <div class="col-sm-6">
        <p>Copyright 2017</p>
    </div>
</div>
          
  
       
    </body>
</html>