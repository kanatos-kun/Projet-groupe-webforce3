

    <title>DASHBOARD | USER</title>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>

		
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

	

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
	
	<link rel="stylesheet" href="css/jquery-jvectormap-1.2.2.css"/>
	<link rel="stylesheet" href="css/AdminLTE.min.css"/>
	<link rel="stylesheet" href="css/_all-skins.min.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"/>

	<link rel="stylesheet" type="text/css" href="css/Dashboard_utilisateur.css"/>
	

	<!-- jQuery 3.2.1 -->
	<script src="js/jquery-3.2.1.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="js/bootstrap.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	
	<!-- FastClick -->
	<script src="js/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="js/adminlte.js"></script>
	<!-- Sparkline -->
	<script src="js/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="js/jquery.slimscroll.min.js"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="js/Chart.min.js"></script>
	<script src="js/dashboard2.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="js/demo.js"></script>
	<script src="js/Dashboard_utilisateur.js"></script>
	
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-default" id="nav1">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul>
				<li><a class="Accueil" href="#">Accueil</a></li>
				<li><a class="Projets" href="Projets.html">Projets</a></li>
				<li><a class="Formations" href="Formations.html">Formations</a></li>
				<li><a class="Profil" href="profile.html">Profil</a></li>
			</ul>	
		</div>

		<div class="navbar-custom-menu user-menu">
			<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="img/img1.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs">Alexander Pierce</span>
					</a>
					<ul class="dropdown-menu ">
						<!-- User image -->
						<li class="user-profil Users">
							<img src="img/img1.jpg" class="img-circle circle2" alt="User Image">

							<p>
								Alexander Pierce - Web Developer
								<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="row">
								<div class="col-xs-6 text-center">
									<a href="#">Followers</a>
								</div>
								
								<div class="col-xs-6 text-center">
									<a href="#">Contacts</a>
								</div>
							</div>
							<!-- row -->
						</li>
						<!-- Menu Footer -->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profil</a>
							</div>
							<div class="pull-right">
								<a href="#" class="btn btn-default btn-flat">Deconnexion</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- NAVBAR
<div class="container-fluid">
<!-- SECTION 1 -->
	<section class="row row1">
		<!-- Info boxes -->
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="small-box Box1">
				<div class="inner">
					<h3>150</h3>

					<p>Contacts</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<a href="#" class="small-box-footer minFooter">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3">
			<!-- small box -->
			<div class="small-box Box2">
				<div class="inner">
					<h3>53<sup style="font-size: 20px"></sup></h3>

					<p>Contacts Pro</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer minFooter">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="small-box Box3">
				<div class="inner">
					<h3>480</h3>

					<p>Nombre de visites</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer minFooter">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-3">
			<!-- small box -->
			<div class="small-box Box4">
				<div class="inner">
					<h3>3<sup style="font-size: 20px"></sup></h3>

					<p>Projets en cours</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer minFooter">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

	</section>
<!-- SECTION 1 -->

<!-- SECTION 2 -->
	<section class="row row2">
		<!-- FIL D'ACTU -->
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

			<div class="row3">
				<div class="box direct-chat col-xs-12">

				
					<div class="box-header">
						<h3 class="box-title">Fil d'actualité</h3>
						<div class="box-tools pull-right">
						</div>
					</div>
					<!-- /.box-header -->
		
<!-- CHATBOX -->
		<!-- Intégrer overflow: scroll dans le css -->
		<div id="messages">
			<?php
// on se connecte à notre base de données
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '');
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}

// on récupère les 10 derniers messages postés
			$requete = $bdd->query('SELECT * FROM messages ORDER BY id DESC LIMIT 0,10');

			$SortArray;
			while($donnees = $requete->fetch()){
// on affiche le message (l'id servira plus tard)
// echo "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
// echo "<pre>";
// print_r($donnees);
// echo "</pre>";
				$SortArray[] = "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";
			}

			for($i=(count($SortArray)-1);$i>=0;$i--){
				echo "<img style='display:inline;width:40px;height:40px' src='img/Logo3.jpg'/>".$SortArray[$i];
			}

			$requete->closeCursor();
			?>
		</div>
		<form method="POST" action="#">
			Pseudo : 
			<input class="form-control chatPseudo" name="pseudo" id="pseudo" type="text"/><br/>
			Message : 
			<textarea name="message" class="form-control" id="liveChat"></textarea><br/>
			<input class="col-centered" type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
		</form>
		<!-- CHATBOX -->
	</div>
</div>
</div>
			<!-- FIL D'ACTU -->
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="row row4">
				<!-- SUGGESTION DE CONTACTS -->
				<div class="col-xs-12 sugContact">
					<div class="box-header">
						<h3 class="box-title">Suggestion de contacts</h3>
					</div>
					<div class="row rdOffers">
						<div class="col-xs-12 col-md-4">
							<a href=""><img src="img/128x128.jpg"/><p>jnhgfdsqfg</p></a>
						</div>
						<div class="col-xs-12 col-md-4">	
							<a href=""><img src="img/128x128.jpg"/><p>kjuhgfrd</p></a>
						</div>
						<div class="col-xs-12 col-md-4">
							<a href=""><img src="img/128x128.jpg"/><p>rtgyhjjuhygfd</p></a>
						</div>
					</div>
				</div>
				<!-- SUGGESTION DE CONTACTS -->

				<!-- DERNIERES OFFRES -->
				<div class="col-xs-12 newOffres">
					<div class="box-header">
						<h3 class="box-title">Dernières Offres</h3>
					</div>
					<div class="row rdContact">
						<div class="col-xs-12 col-md-4">
							<a href=""><img src="img/128x128.jpg"/><p>jnhgfdsqfg</p></a>
						</div>
						<div class="col-xs-12 col-md-4">	
							<a href=""><img src="img/128x128.jpg"/><p>kjuhgfrd</p></a>
						</div>
						<div class="col-xs-12 col-md-4">
							<a href=""><img src="img/128x128.jpg"/><p>rtgyhjjuhygfd</p></a>
						</div>
					</div>
				</div>
				<!-- DERNIERES OFFRES -->
			</div>
		
		</div>

	</section>
<!-- SECTION 2 -->

<!-- SECTION 3 -->
	<section class="row row5">
		
		<div class="col-xs-12 col-sm-12 col-md-7">
			<div class="row row6">
				<div class="col-xs-12" id="">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10720.859667953773!2d3.5881564999999997!3d47.7966695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1498051283360" width="800" height="400" frameborder="0" allowfullscreen id="map"></iframe>

				</div>
			</div>
		</div>

		
		<div class="col-xs-12 col-sm-12 col-md-5">
			<div class="row row7">
				
				<!-- INFORMATIONS UTILISATEUR -->		
				<div class="col-xs-12 box" id="usersInfo">
					<div class="box-header">
						<h3 class="box-title">Informations utilisateur</h3>
					</div>
						<p>Nom : <div id="nom"></div></p>
						<p></p>
						<p>Prénom : <div id="prenom"></div></p>
						<p></p>
						<p>Statut Professionnel : <div id="statut_pro"></div></p>
						<p></p>
						<p>Ville : <div id="ville"></div></p>
						<p></p>
						<p>Mobilitées : <div id="mobilitees"></div></p>
				</div>
				<!-- INFORMATIONS UTILISATEUR -->

				<!-- FORMULAIRE DE RECHERCHE UTILISATEUR -->
				<div class="col-xs-12" id="userSearch">

					<form class="navbar-form navbar-left" method="GET" action="ajaxMap">
				        <div class="form-group">
				          <input type="text" class="form-control" id="recherche" placeholder="Adresse/Ville/Code Postal">
				        </div>
				        <button type="submit" class="btn btn-default SearchBouton">Rechercher</button>
			      	</form>
				</div>
				<!-- FORMULAIRE DE RECHERCHE UTILISATEUR -->
			
			</div>
		</div>
	</section>
<!-- SECTION 3 -->

<!-- SECTION 4 -->
	<section class="row row8" id="">
		<!-- DERNIERS INSCRITS -->
		<div class="col-xs-12 col-sm-12 col-md-8">

			<div class="box LastMembers">
				<div class="box-header with-border">
					<i class="fa fa-user-circle"></i>

					<h3 class="box-title">Derniers Membres</h3>

					<div class="box-tools pull-right">
						<span class="label NewMembers">8 New Members</span>
					</div>
				</div>
			<!-- /.box-header -->
				<div class="row row9">
					
					<!-- The Team -->
					<div class="home-doctors  clearfix">

						<div class="container">
							<div class="row">
								<!-- entry1 -->
									<div class="col-lg-3 col-md-3 col-sm-6  text-center doc-item">
										<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

											<ul class="list-inline social-lists animate">
												<li><a href="javascript:;"><i class="fa fa-google-plus-square"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
											</ul>

											<figure>
												<img width="670" height="500" src="img/img5.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
											</figure>

											<div class="text-content">
												<h5>Arthur Quincampoids</h5>
												<!-- <div class="for-border"></div> -->
												<h5><small>Community manager</small></h5>
											</div>
										</div>
									</div>





									<!-- entry2 -->
									<div class="col-lg-3 col-md-3 col-sm-6  text-center doc-item">
										<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

											<ul class="list-inline social-lists animate">
												<li><a href="javascript:;"><i class="fa fa-google-plus-square"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
											</ul>

											<figure>
												<img width="670" height="500" src="img/img2.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
											</figure>

											<div class="text-content">
												<h5>Angi</h5>
												<!-- <div class="for-border"></div> -->
												<h5><small>Princesse</small></h5>
											</div>
										</div>
									</div>




									<!-- entry3 -->
									<div class="col-lg-3 col-md-3 col-sm-6  text-center doc-item">
										<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

											<ul class="list-inline social-lists animate">
												<li><a href="javascript:;"><i class="fa fa-google-plus-square"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
											</ul>

											<figure>
												<img width="670" height="500" src="img/img4.jpeg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
											</figure>

											<div class="text-content">
												<h5>G Z</h5>
												<!-- <div class="for-border"></div> -->
												<h5><small>Buisnessman</small></h5>
											</div>
										</div>
									</div>





									<!-- entry4 -->
									<div class="col-lg-3 col-md-3 col-sm-6  text-center doc-item">
										<div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

											<ul class="list-inline social-lists animate">
												<li><a href="javascript:;"><i class="fa fa-google-plus-square"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
												<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
											</ul>

											<figure>
												<img width="670" height="500" src="img/img3.jpeg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"> 
											</figure>

											<div class="text-content">
												<h5>Inspecteur Harry</h5>
												<!-- <div class="for-border"></div> -->
												<h5><small>Gran Torino</small></h5>
											</div>
										</div>
									</div>
									<!-- // -->




									<div class="visible-sm clearfix margin-gap"></div>
								</div>

							</div>

						</div>
						<!-- //The Team -->
						<!-- /.users-list -->
					
						<!-- /.box-body -->
				</div>
					<!--/.box -->
			</div>

		</div>
			
		<!-- DERNIERS INSCRITS -->

			<!-- CALENDAR -->
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-solid Calendar">
				<div class="box-header ui-sortable-handle" >
					<i class="fa fa-calendar"></i>

					<h3 class="box-title">Agenda</h3>
					<!-- tools box -->
					<div class="pull-right box-tools">
						<!-- button with a dropdown -->
						<div class="btn-group">
							<button type="button" class="btn btn-sm dropdown-toggle BurggerMenu" data-toggle="dropdown">
								<i class="fa fa-bars"></i></button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#" id="AddEvent">Ajouter un évènement</a></li>
									<li><a href="#" id="ClearEvent">Supprimer un évènement</a></li>
									<li class="divider"></li>
									<li><a href="#" id="ViewCalendar">Voire le calendrier</a></li>
								</ul>
						</div>

					</div>
						<!-- /. tools -->
				</div>
					<!-- /.box-header -->
				<div class="box-body no-padding">
					<!--The calendar -->
					<div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline">
					<div class="datepicker-days" style="display: block;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">June 2017</th><th class="next" style="visibility: visible;">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day">28</td><td class="old day">29</td><td class="old day">30</td><td class="old day">31</td><td class="day">1</td><td class="day">2</td><td class="day">3</td></tr><tr><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td><td class="day">10</td></tr><tr><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td></tr><tr><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td></tr><tr><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="new day">1</td></tr><tr><td class="new day">2</td><td class="new day">3</td><td class="new day">4</td><td class="new day">5</td><td class="new day">6</td><td class="new day">7</td><td class="new day">8</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">2017</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table table-condensed"><thead><tr><th class="prev" style="visibility: visible;">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next" style="visibility: visible;">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div>
					</div>
				</div>

			</div>
				<!-- /.row -->
		</div>

		<!-- CALENDAR -->
		
	</section>
<!-- SECTION 4 -->

<!-- SECTION 5 -->
	<section class="row row11">
		<!-- MAILBOX -->
		<div id="contact_form" class="col-xs-12 col-md-4">

			<div class="box box-info">
				<div class="box-header ui-sortable-handle">
					<a href="Mailbox.php"><i class="fa fa-envelope"></i></a>

					<h3 class="box-title">Quick Email</h3>
				</div>


				<div class="box-body">
					<form name="mailbox" method="post" action="#">

						<div class="form-group">
							<input class="form-control" name="emailto" placeholder="Email" type="email">
						</div>

						<div class="form-group">
							<input class="form-control" name="subject" placeholder="Sujet" type="text">
						</div>

						<div class="form-group">
							<textarea class="form-control" name="message" id="message" placeholder="Message">
							</textarea>
						</div>

						<div class="box-footer clearfix">
							<button type="button" class="pull-right btn btn-default" id="sendEmail">Send
								<i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>

					</form>
				</div>
			</div>	
		</div>	
		<!-- MAILBOX -->

		<!-- DERNIERS PROJETS -->
		<div class="col-xs-12 col-md-8">
			<div class="LastProj">
				<div class="box-header" id="titleProj">
					<h3 class="box-title">Derniers Projets</h3>
				</div>
				<div class="row listProj">
					<div class="col-xs-12 col-md-3">
						<a href=""><img width="128" height="128" src="img/Logo1.jpg"/><p>jnhgfdsqfg</p></a>
					</div>

					<div class="col-xs-12 col-md-3">
						<a href=""><img width="128" height="128" src="img/Logo3.jpg"/><p>jnhgfdsqfg</p></a>
					</div>

					<div class="col-xs-12 col-md-3">
						<a href=""><img width="128" height="128" src="img/Logo4.jpg"/><p>jnhgfdsqfg</p></a>
					</div>

					<div class="col-xs-12 col-md-3">
						<a href=""><img width="128" height="128" src="img/Logo9.jpg"/><p>jnhgfdsqfg</p></a>
					</div>
				</div>
			</div>
		</div>
		<!-- DERNIERS PROJETS -->
	</section>
<!-- SECTION 5 -->

</div>

</body>

<footer>
    
    <p>ScrapSearch &copy 2017 | <a href="Mentions Légales" class="ML"> Mentions légales </a></p>
    
</footer>

