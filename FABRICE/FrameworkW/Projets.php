
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
				<li><a class="Accueil" href="Dashboard.php">Accueil</a></li>
				<li><a class="Projets" href="Projets.php">Projets</a></li>
				<li><a class="Formations" href="Formations.php">Formations</a></li>
				<li><a class="Profil" href="profil.php">Profil</a></li>
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="img/img1.jpg" class="user-image" alt="User Image">
						<span class="hidden-xs">Alexander Pierce</span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header ">
							<img src="img/img1.jpg" class="img-circle" alt="User Image">

							<p>
								Alexander Pierce - Web Developer
								<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Contacts</a>
								</div>
							</div>
							<!-- /.row -->
						</li>
						<!-- Menu Footer-->
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

<!-- NAVBAR -->

<!-- SECTION 1 -->
<section class="row AnnonceForm">
	<div class="col-xs-12 ListProj">

		<table class="texteCarnet" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">

			<tbody>
				<tr class="trTitreTableau">
					<td valign="top"><b>Projets</b></td>
					<td valign="top"><b>Descriptif</b> </td>
					<td align="center">&nbsp;</td>
					<td align="center">&nbsp;</td>
				</tr>
<!-- ligne Annonce 1 -->
				<tr class="tr1">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>SPARTAN</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj1">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj1" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 1 -->

<!-- ligne Annonce 2 -->
<tr class="tr2">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>X-centriks</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj2">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj2" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 2 -->

<!-- ligne Annonce 3 -->
<tr class="tr1">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>WebRoller</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj3">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj3" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 3 -->

<!-- ligne Annonce 4 -->
<tr class="tr2">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>Aniwalls</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj4">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj4" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 4 -->

<!-- ligne Annonce 5 -->
<tr class="tr1">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>DarkSpin</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj5">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj5" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 5 -->

<!-- ligne Annonce 6 -->
<tr class="tr2">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>EuroServ</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj6">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj6" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 6 -->

<!-- ligne Annonce 7 -->
<tr class="tr1">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>FuryWeb</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj7">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj7" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 7 -->

<!-- ligne Annonce 8 -->
<tr class="tr2">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>HightLight</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj8">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj8" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 8 -->

<!-- ligne Annonce 9 -->
<tr class="tr1">
					<td valign="top" height="40"><img height="50" width="50" src="img/Logo8.jpg"><br/><b>AssKicker</b>
						<br>
					</td>
					<td valign="top">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</td>
					<td align="center">&nbsp;</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalProj9">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalProj9" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLongTitle"><strong>Fiche de proposition de projet</strong></h3>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<div>
												<p><strong>– Intitulé du projet</strong><br>
												<span>Une phrase de trois à cinq mots doit suffire à nommer le projet de façon non ambigüe (de façon que ce projet ne soit pas confondu avec un autre). </span></p>
												<p><strong>– Origine de la proposition</strong><br>
												<span>Vous devez simplement indiquer ici les prénom et nom de l’initiateur ainsi que, pour les organismes importants, son affectation. Indiquer aussi l’identité du rédacteur si ce n’est pas la même personne.</span></p>
												<p><strong>– Problématique et contexte</strong><br>
												<span>Tout projet vise à résoudre un problème ou combler une insatisfaction. Décrivez la situation qui motive la demande de projet. N’hésitez pas à entrer dans les détails et à forcer le trait&nbsp;: si le décideur sous-estime le problème, la demande sera refusée.<br>
												</span></p>
												<p><strong>– Description de l’idée de projet</strong><br>
												<span>Décrivez en quelques mot en quoi consiste le projet&nbsp;: Lancer tel nouveau produit, remplacer telle machine vétuste, construire un bâtiment social, réorganiser le service après-vente, créer un site internet de vente en ligne…Soyez à la fois bref et précis.<br></span>
												</p>
												<p><strong>– Finalité</strong><br>
												<span>Mettez-vous dans la tête du décideur et montrez-lui le bénéfice que procurera la mise en œuvre du projet. Bien entendu à ce stade vous n’avez pas de certitudes et encore moins de chiffres précis. Que cela ne vous empèche pas de faire des hypothèses. Les bénéfices ne sont pas forcément économiques. Mettez en évidence toutes les améliorations à attendre du projet et termes d’image, de connaissances acquise, de conquête de nouveaux marchés, etc…<br></span>
												</p>
												<p><strong>– Cohérence avec la stratégie</strong><br>
												<span>Un projet, même prometteur, sera refusé s’il n’est pas en phase avec la stratégie de l’organisme. Indiquez dans quel axe thématique s’inscrit le projet (amélioration de la productivité, conquête de nouveaux marchés…) et montrez en quoi il contribue à la réalisation des objectifs de l’axe. Montrez également comment ce projet complète ou renforce d’autres projets déja acceptés par la hiérarchie.<br>
												</span>
												</p>
												<p><strong>– Efforts à consentir</strong><br>
												<span>Tout projet consomme des ressources. Tentez une estimation du budget nécessaire, et/ou du nombre d’heures-salarié qui devront lui être consacrées. Annoncez un délai.</span>
												</p>
												<p></p>
											</div>

										</div>
												<!-- Contenu du modale -->
											
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
					</td>
				</tr>
<!-- ligne Annonce 9 -->

			</tbody>
		</table>
</div>
</section>
<!-- SECTION 1 -->

</body>

<footer>
    
    <p>ScrapSearch &copy 2017 | <a href="Mentions Légales" class="ML"> Mentions légales </a></p>
    
</footer>

