<?php $this->layout('layout', ['title' => $title]) ?>

<?php $this->start('main_content') ?>


        <div class="si te-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <h1>
                                        <a href="#">Notresite</a>
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
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="overlay"></div>
                                <img src="<?= $this->assetUrl('images/slide.jpg'); ?>" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                      <a href="#" class="slider-btn">Inscription</a>
                                      <p>Vous avez déjà un compte ? Connectez-vous</p>
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img 
                                src="<?= $this->assetUrl('images/slide4.jpg')?>" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                     <a href="#" class="slider-btn">Inscription</a>
                                     <p>Vous avez déjà un compte ? Connectez-vous</p>
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img src="<?= $this->assetUrl('images/slide5.jpg')?>" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                     <a href="#" class="slider-btn">Inscription</a>
                                     <p>Vous avez déjà un compte ? Connectez-vous</p>
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
                      <a href="#" class="slider-btn">Inscription</a>
                      <p>Vous avez déjà un compte ? Connectez-vous</p>  
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
          
  
        

        <script text="text/javascript" src="<?= $this->assetUrl("js/vendor/jquery-1.11.0.min.js") ?>"></script>
        <script>
        window.jQuery || document.write('<script src="<?= $this->assetUrl('js/vendor/jquery-1.11.0.min.js')?>"><\/script>')
        </script>
        <script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.js')?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('js/plugins.js')?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('js/main.js')?>"></script>


<?php $this->stop('main_content') ?>