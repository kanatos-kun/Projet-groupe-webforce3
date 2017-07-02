<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main-header') ?>
<div class="container">
    <div id="menu-wrapper">
        <div class="row">
        <!-- Logo -->
            <div class="logo-wrapper col-md-2 col-sm-2">
                <h1>
                    <a href="#">Wolfo</a>
                </h1>
            </div>
            <!-- Les menus de la navbar -->
            <div class="col-md-10 col-sm-10 main-menu text-right">
                <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                <ul class="menu-first">
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="<?=$this->url('default_premium')?>">Premium</a></li>
                    <li><a href="<?=$this->url('default_propos')?>">A propos</a></li>
                    <button onclick="document.getElementById('id02').style.display='block'">Connexion</button>
                </ul>
            </div> <!-- /.main-menu -->
        </div> <!-- /.row -->
    </div> <!-- /#menu-wrapper -->
</div> <!-- /.container -->
<?php $this->stop('main-header') ?>

<?php $this->start('main_content') ?>

<!-- Le formulaire d'inscription -->
<div id="id01" class="modal id1">
 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
<form class="modal-content animate" action="" method="POST">
<div class="container">
         <label for="email"><b>Email</b></label>
         <input type="mail" id="email" placeholder="Enter Email" name="reg-email" required/>

         <label for="email-repeat"><b>Repeat Email</b></label>
         <input type="mail" placeholder="Enter Email" name="reg-email-repeat" required/>

         <label for="psw"><b>Password</b></label>
         <input type="password" id="psw" placeholder="Enter Password" name="reg-psw" required/>

         <label><b>Repeat Password</b></label>
         <input type="password" placeholder="Repeat Password" name="reg-psw-repeat" required/>
         <input type="checkbox" checked="checked"> Remember me
         <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
         <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
         <input type="submit" class="signupbtn" value="Sign Up"/>
            </div>
            <div style='color:red'><?=$errReg?></div>
</div>
</form>
</div>

<!-- le formulaire de connexion -->
<div id="id02" class="modal id2">
<span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

<!-- Modal Content -->
<form class="modal-content animate" action="" method="POST">

<div class="container">
<label><b>Mail</b></label>
<input type="text" placeholder="Enter Mail" name="log-email" required/>

<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="log-psw" required/>

<button type="submit">Login</button>
<input type="checkbox" checked="checked"/> Remember me
<div style='color:red'><?=$errLog?></div>
</div>

<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn-2">Cancel</button>
<span class="psw">Forgot <a href="#">password?</a></span>
</div>
</form>
</div>



<!-- le slider  -->
<div class="site-slider">
<div class="flexslider">
<ul class="slides">
<!-- premier slide -->
   <li>
        <div class="overlay"></div>
        <!-- Première image -->
           <img width="100%" src="<?=$this->assetUrl($asset['img']['slider-showcase'][0])?>" alt="slide 1"/>
           <div class="slider-caption visible-md visible-lg">
        <!-- Bouton d'inscription -->
        <button  onclick="document.getElementById('id01').style.display='block'">Inscrivez vous !</button>
          </div>
  </li>
  <li>
  <!-- Deuxième slide -->
       <div class="overlay"></div>
       <!-- Deuxième image -->
       <img width="100%" src="<?=$this->assetUrl($asset['img']['slider-showcase'][1])?>" alt="slide 2"/>
          <div class="slider-caption visible-md visible-lg">
       <!-- Bouton d'inscription -->
       <button  onclick="document.getElementById('id01').style.display='block'">Inscrivez vous !</button>
         </div>
</li>
    <!-- Troisième slide -->
   <li>
       <div class="overlay"></div>
       <!-- Troisième image -->
       <img width="100%" src="<?=$this->assetUrl($asset['img']['slider-showcase'][2])?>" alt="slide 3"/>
          <div class="slider-caption visible-md visible-lg">
       <!-- Bouton d'inscription -->
      <button  onclick="document.getElementById('id01').style.display='block'">Inscrivez vous !</button>
         </div>
  </li>
</ul> <!-- /.slides -->
</div> <!-- /.flexslider -->
</div> <!-- /.site-slider -->



<!-- SECTION 1-->


<div class="content-section1" id="pub-appli">
<div class="container">
<div class="row">
<!-- titre de la section -->
   <div class="heading-section col-md-12 text-center">
       <h2>Notre futur appli mobile bientôt dans votre poche !</h2>
   </div> <!-- /.heading-section -->
</div> <!-- /.row -->
<div class="row">
<!-- Colonne vide -->

   <div class="col-md-2 col-sm-6">
   </div> <!-- /.col-md-2 -->

   <!-- Image principale de la section -->
   <div class="col-md-8 col-sm-6">
       <img src="<?=$this->assetUrl($asset['img']['affiche'])?>" alt="image pub"/>
   </div> <!-- /.col-md-8 -->

   <!-- Colonne vide -->
   <div class="col-md-2 col-sm-6">
   </div> <!-- /.col-md-2 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /#pub-appli-->



     <!-- SECTION 2 -->


<div class="content-section2" id="services">
<div class="container">
<div class="row">
<!-- Titre de la section -->
   <div class="heading-section col-md-12 text-center">
       <h2>Nos services</h2>

   </div> <!-- /.heading-section -->
</div> <!-- /.row -->
       <div class="row">
                   <!-- Premier service -->
                   <div class="col-md-3 col-sm-6">
                       <div class="service-item" id="service-1">
                           <div class="service-icon">
                               <i class="fa fa-file-code-o"></i>
                           </div> <!-- /.service-icon -->
                           <div class="service-content">
                               <div class="inner-service">
                                   <!-- Nom du premier service -->
                                   <h3>Mise en relation</h3>
                               </div>
                           </div> <!-- /.service-content -->
                       </div> <!-- /#service-1 -->
                   </div> <!-- /.col-md-3 -->

                      <!-- Deuxième service -->
                   <div class="col-md-3 col-sm-6">
                       <div class="service-item" id="service-2">
                           <div class="service-icon">
                               <i class="fa fa-paper-plane-o"></i>
                           </div> <!-- /.service-icon -->
                           <div class="service-content">
                               <div class="inner-service">
                               <!-- Nom du deuxième service -->
                                  <h3>Recherche de stage</h3>
                              </div>
                          </div> <!-- /.service-content -->
                      </div> <!-- /#service-2 -->
                  </div> <!-- /.col-md-3 -->

                     <!-- troisième service -->
                  <div class="col-md-3 col-sm-6">
                   <div class="service-item" id="service-3">
                       <div class="service-icon">
                           <i class="fa fa-institution"></i>
                       </div> <!-- /.service-icon -->
                       <div class="service-content">
                           <div class="inner-service">
                           <!-- Nom du troisième service -->
                              <h3>Cv en ligne</h3>
                          </div>
                      </div> <!-- /.service-content -->
                  </div> <!-- /#service-3 -->
              </div> <!-- /.col-md-3 -->

                <!-- Quatrième service -->
           <div class="col-md-3 col-sm-6">
               <div class="service-item" id="service-4">
                   <div class="service-icon">
                       <i class="fa fa-flask"></i>
                   </div> <!-- /.service-icon -->
                   <div class="service-content">
                       <div class="inner-service">
                       <!-- Nom du quatrième service -->
                        <h3>Service de messagerie</h3>
                       </div>
                    </div> <!-- /.service-content -->
              </div> <!-- /#service-4 -->
         </div> <!-- /.col-md-3 -->
   </div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /#services -->



        <!-- SECTION 3 -->


<div class="content-section3" id="portfolio">
<div class="container">
   <div class="row">
<!-- Titre de la section 3 -->
      <div class="heading-section col-md-12 text-center">
       <h2>Nos derniers membres</h2>

      </div> <!-- /.heading-section -->
   </div> <!-- /.row -->
<div class="row">

   <!-- Colonne vide -->
       <div class="col-md-3">
       </div> <!-- /.col-md-3 -->

       <!-- Photo de profil du membre 1 -->
       <div class="portfolio-item col-md-2 col-sm-6">
           <div class="portfolio-thumb">
               <img src="<?= $this->assetUrl($asset['img']['last-member'][0])?>" alt="Membre 1"/>
               <div class="portfolio-overlay">
                   <h3>Jean didier</h3>

               </div> <!-- /.portfolio-overlay -->
           </div> <!-- /.portfolio-thumb -->
       </div> <!-- /.portfolio-item -->

       <!-- Photo de profil du membre 2 -->
       <div class="portfolio-item col-md-2 col-sm-6">
           <div class="portfolio-thumb">
               <img src="<?= $this->assetUrl($asset['img']['last-member'][0])?>" alt="Membre 2"/>
               <div class="portfolio-overlay">
                   <h3>Jean kevin</h3>


               </div> <!-- /.portfolio-overlay -->
           </div> <!-- /.portfolio-thumb -->
       </div> <!-- /.portfolio-item -->

        <!-- Photo de profil du membre 3 -->
       <div class="portfolio-item col-md-2 col-sm-6">
           <div class="portfolio-thumb">
               <img src="<?= $this->assetUrl($asset['img']['last-member'][0])?>" alt="Membre 3"/>
               <div class="portfolio-overlay">
                   <h3>Jean claude</h3>
               </div> <!-- /.portfolio-overlay -->
           </div> <!-- /.portfolio-thumb -->
       </div> <!-- /.portfolio-item -->


   <!-- Colonne vide -->
   <div class="col-md-3">
   </div> <!-- /.col-md-3 -->

</div> <!-- /.row -->

</div> <!-- /.container -->
</div> <!-- /#portfolio -->




        <!-- SECTION 4-->


<div class="content-section4">
<div class="container" id="pub">
<div class="row">
<!-- Titre de la section 4 -->
   <div class="heading-section col-md-12 text-center">
        <h2>Devenez acteur de votre vie en nous  rejoignant </h2>
        <br>
        <br>
        <br>
        <!-- Bouton d'inscription -->
        <button onclick="document.getElementById('id01').style.display='block'">Inscrivez-vous !</button>
   </div> <!-- /.heading-section -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</div>  <!-- /.pub-->

<?php $this->stop('main_content') ?>

<!-- FOOTER-->

<!--Debut du footer-->
<?php $this->start('footer')?>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<div class="container">
<div class="row">

<!-- Première partie du footer -> infos contact -->
<div class="col-md-4 col-sm-6 footer-col">
   <div class="logofooter"> Contact</div>
   <p><i class="fa fa-envelope"></i> E-mail : @.com</p>
   <p><i class="fa fa-envelope"></i> Téléphone : 09 09 09 09 09 </p>
</div> <!-- /.footer-col -->

<!-- Deuxième partie du footer -> liens utiles -->
<div class="col-md-4 col-sm-6 footer-col">
   <h6 class="heading7">LIENS UTILES</h6>
   <ul class="footer-ul">
     <li><a href="#">A propos</a></li>
     <li><a href="#"> Avantages premium</a></li>
     <li><a href="#"> Termes & Conditions</a></li>
 </ul> <!-- /.footer-ul -->
</div> <!-- /.footer-col -->

<!-- Troisième  partie du footer -> réseaux sociaux -->
<div class="col-md-4 col-sm-6 footer-col">
<h6 class="heading7">Réseaux sociaux</h6>
<ul class="footer-social">

<!-- icônes réseaux sociaux -->
 <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
 <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
 <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
 <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
</ul>
</div> <!-- /.footer-col -->

</div> <!-- /.row -->
</div> <!-- /.container -->
<?php $this->stop('footer')?>

<?php $this->start('footer2')?>

<!--Deuxième footer-->
<div class="container">
<div class="col-md-6">
<p>2017</p>
</div>
<div class="col-md-6">
<ul class="bottom_ul">
<li><a href="#">Wolfo</a></li>
 <li><a href="#">Webforce 3</a></li>

</ul>
</div>
</div>

<?php $this->stop('footer2')?>
<!--********************************************************************
                   Gestion des fichiers CSS
*********************************************************************-->
<?php $this->start('css') ?>
<?php foreach($asset["css"] as $index => $value)
  {?>
    <link type='text/css' rel='stylesheet' href='
    <?php
    if($value["link"] == "relative")
    {
      echo $this->assetUrl($value["url"]);
    }
    else
    {
      echo $value["url"];
    }
    ?>'/>
  <?php } ?>

<!--********************************************************************
                   Gestion des fichiers JS
*********************************************************************-->
<?php $this->stop('css') ?>

<?php $this->start('js')?>
<script type='text/javascript' src='<?=$this->assetUrl("TOTOR/assets/js/jquery-3.2.1.js")?>'></script>
<script type='text/javascript' src="<?=$this->assetUrl('TOTOR/js/vendor/jquery-1.11.0.min.js')?>"></script>
<script>window.jQuery || document.write('<script src="<?=$this->assetUrl('TOTOR/js/vendor/jquery-1.11.0.min.js')?>"><\/script>')</script>

<?php foreach($asset["js"] as $index => $value)
      {?>
        <script type='text/javascript' src='
        <?php
        if($value["link"] == "relative")
        {
          echo $this->assetUrl($value["url"]);
        }
        else
        {
          echo $value["url"];
        }
        ?>'></script>
<?php } ?>

<?php $this->stop('js')?>
