
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
	<div class="col-xs-12 mdListForm">

		<table class="texteCarnet" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">

			<tbody>
				<tr class="trTitreTableau">
					<td valign="top"><b>Diplôme</b></td>
					<td valign="top"><b>Durée&nbsp;et&nbsp;Prérequis</b> </td>
					<td valign="top"><b>Ville</b></td>
					<td align="center">&nbsp;</td>
				</tr>
<!-- ligne Annonce 1 -->
				<tr class="tr1">
					<td valign="top" height="40"><b>BTS</b>
						<br>
						Design Graphique option Communication et Médias Numériques
					</td>
					<td valign="top">
						2 ans - Bac<br>
						1 an - Bac+2<br>
					</td>

					<td valign="top" align="center">
						<br>BESANÇON (25)
					</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm1">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalForm1" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
												<tbody><tr class="trTitreTableau">
													<td colspan="3" align="left"><strong>Formation :</strong></td>
												</tr>
												<tr>
													<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
												</tr>
												<tr>
													<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
													<td width="510">BTS </td>
												</tr>
												<tr>
													<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
													<td>Design Graphique option Communication et Médias Numériques</td>
												</tr>
												<tr>
													<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
													<td> 2 ans - Bac<br>
														1 an - Bac+2<br>
													</td>
												</tr>
												<tr>
													<td class="tr1"><strong>Niveau de la formation : </strong></td>
													<td>Bac+2</td>
												</tr>
												<tr>
													<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
												</tr>
												<tr>
													<td colspan="2">Cette formation prépare à la réalisation de produits en ligne et hors ligne, à la conception et à la conduite des projets multimédia
														(CD-rom, sites internet, etc…). Elle s'adresse à des jeunes de 16 à 25 ans titulaires d'un Bac STD2A, d'un Bac Pro de la chaine graphique, d'un Bac général ou technologique avec une année de MANAA (mise à niveau en arts appliqués)ou d'un BTS Design Graphique option Médias Imprimés souhaitant compléter leur formation et ayant un contrat d'apprentissage. Elle nécessite des qualités de créativité, de sensibilité, de capacité à communiquer et à travailler en équipe. Il est possible de poursuivre ensuite en Licence Produits et Services Multimédia, en DSAA1, en DUT Services et réseaux de communication ou d'intégrer une école d'art. Le métier préparé est celui d'infographiste exécutant multimédia, de concepteur réalisateur multimédia ou de webdesigner. 
														Contenu des épreuves : 
														Projet professionnel - coef. 8 Dossier de travaux - coef. 3 Créativité réactive - coef. 3 Recherche créative - coef.3 Sciences humaines - coef. 3 Anglais - coef. 3 </td>
													</tr>
													<tr>
														<td colspan="2"><strong>Taux de réussite aux diplômes :</strong> 60%</td>
													</tr>
													<tr>
														<td class="tr1" colspan="2">&nbsp;</td>
													</tr>
													<tr>
														<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
														<td>
															25000 BESANÇON
														</td>
													</tr>
													<tr>
														<td class="tr1" colspan="2">&nbsp;</td>
													</tr>
													<tr>
														<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 31/05/2017.</td>
													</tr>
												</tbody></table>

												<!-- Contenu du modale -->
											</div>
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
							<td valign="top" height="40"><b>Licence Pro</b>
								<br>
								Métiers de l’informatique : Développeur et Intégrateur de Web Applications (DIWA)
							</td>
							<td valign="top">
								1 an - Bac+2<br>
							</td>

							<td valign="top" align="center">
								<br>LAVAL CEDEX (53)
							</td>
							<td align="center">
								<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm2">
									<i class="fa fa-search" aria-hidden="true"></i>
									&nbsp;Afficher</button>

									<div class="modal fade" id="modalForm2" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- Contenu du modale -->

													<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
														<tbody><tr class="trTitreTableau">
															<td colspan="3" align="left"><strong>Formation :</strong></td>
														</tr>
														<tr>
															<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
														</tr>
														<tr>
															<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
															<td width="510">Licence Pro </td>
														</tr>
														<tr>
															<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
															<td>Métiers de l’informatique : Développeur et Intégrateur de Web Applications (DIWA)</td>
														</tr>
														<tr>
															<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
															<td> 1 an - Bac+2<br>
															</td>
														</tr>
														<tr>
															<td class="tr1"><strong>Niveau de la formation : </strong></td>
															<td>Bac+3</td>
														</tr>
														<tr>
															<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
														</tr>
														<tr>
															<td colspan="2">L'objectif de cette licence est de former de futurs professionnels capables gérer des projets d’applications pour le Web et d’en maîtriser le développement et l’intégration

																Programmer le Web	120h : Modélisation des données multimédia	20h, Programmation Client Web	30h, Programmation Serveur Web	30h, Programmation CMS	15h, Webdesign	25h
																Concevoir et gérer un projet multimédia	135h, Anglais professionnel	25h, Communication appliquée à la conduite de projet	25h, Gestion de projet - Approche agile	30h, Outils de la gestion de projet	15h, Analyse des besoins et des usages	20h, IHM et Expérience utilisateur 	20h

																Développer des Webapps	135h : Architecture et développement par Design Patterns	30h, Système d’information multimédia	 25h, Intégration multimédia avancée	40h, Programmation serveur avancée	40h

																Métiers : 

																•	Développeur multimédia
																•	Développeur d'applications web
																•	Intégrateur web 
																•	Webmaster développeur
																•	Développeur Web mobile
																•	Assistant chef de projet
																•	Architecte Web
																•	Consultant IT
															</td>
														</tr>
														<tr>
															<td colspan="2"><strong>Taux de réussite aux diplômes :</strong> 95%</td>
														</tr>
														<tr>
															<td colspan="2"><strong>Taux d'embauche dans les 6 mois après la remise du diplome  :</strong> 95%</td>
														</tr>
														<tr>
															<td class="tr1" colspan="2">&nbsp;</td>
														</tr>
														<tr>
															<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
															<td> 53020 LAVAL CEDEX</td>
														</tr>
														<tr>
															<td class="tr1" colspan="2">&nbsp;</td>
														</tr>
														<tr>
															<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 10/02/2017.</td>
														</tr>
													</tbody></table>

													<!-- Contenu du modale -->
												</div>
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
								<td valign="top" height="40"><b>Licence Pro</b>
									<br>
									Métiers de l’informatique : Conceptn Dévelopmt et Test de Logiciels, Test et qualité Logiciel (TQL)
								</td>
								<td valign="top">
									1 an - Bac+2<br>
								</td>

								<td valign="top" align="center">
									<br>LAVAL CEDEX (53)
								</td>
								<td align="center">
									<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm3">
										<i class="fa fa-search" aria-hidden="true"></i>
										&nbsp;Afficher</button>

										<div class="modal fade" id="modalForm3" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<!-- Contenu du modale -->
														<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
															<tbody><tr class="trTitreTableau">
																<td colspan="3" align="left"><strong>Formation :</strong></td>
															</tr>
															<tr>
																<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
															</tr>
															<tr>
																<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
																<td width="510">Licence Pro </td>
															</tr>
															<tr>
																<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
																<td>Métiers de l’informatique : Développeur et Intégrateur de Web Applications (DIWA)</td>
															</tr>
															<tr>
																<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
																<td> 1 an - Bac+2<br>
																</td>
															</tr>
															<tr>
																<td class="tr1"><strong>Niveau de la formation : </strong></td>
																<td>Bac+3</td>
															</tr>
															<tr>
																<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
															</tr>
															<tr>
																<td colspan="2">L'objectif de cette licence est de former de futurs professionnels capables gérer des projets d’applications pour le Web et d’en maîtriser le développement et l’intégration

																	Programmer le Web	120h : Modélisation des données multimédia	20h, Programmation Client Web	30h, Programmation Serveur Web	30h, Programmation CMS	15h, Webdesign	25h
																	Concevoir et gérer un projet multimédia	135h, Anglais professionnel	25h, Communication appliquée à la conduite de projet	25h, Gestion de projet - Approche agile	30h, Outils de la gestion de projet	15h, Analyse des besoins et des usages	20h, IHM et Expérience utilisateur 	20h

																	Développer des Webapps	135h : Architecture et développement par Design Patterns	30h, Système d’information multimédia	 25h, Intégration multimédia avancée	40h, Programmation serveur avancée	40h

																	Métiers : 

																	•	Développeur multimédia
																	•	Développeur d'applications web
																	•	Intégrateur web 
																	•	Webmaster développeur
																	•	Développeur Web mobile
																	•	Assistant chef de projet
																	•	Architecte Web
																	•	Consultant IT
																</td>
															</tr>
															<tr>
																<td colspan="2"><strong>Taux de réussite aux diplômes :</strong> 95%</td>
															</tr>
															<tr>
																<td colspan="2"><strong>Taux d'embauche dans les 6 mois après la remise du diplome  :</strong> 95%</td>
															</tr>
															<tr>
																<td class="tr1" colspan="2">&nbsp;</td>
															</tr>
															<tr>
																<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
																<td> 53020 LAVAL CEDEX</td>
															</tr>
															<tr>
																<td class="tr1" colspan="2">&nbsp;</td>
															</tr>
															<tr>
																<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 10/02/2017.</td>
															</tr>
														</tbody>
													</table>
													<!-- Contenu du modale -->
												</div>
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
								<td valign="top" height="40"><b>Licence Pro</b>
									<br>
									Métiers de l’informatique : Conceptn Dévelopmt et Test de Logiciels, Test et qualité Logiciel (TQL)
								</td>
								<td valign="top">
									1 an - Bac+2<br>
								</td>

								<td valign="top" align="center">
									<br>LAVAL CEDEX (53)
								</td>
								<td align="center">
									<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm4">
										<i class="fa fa-search" aria-hidden="true"></i>
										&nbsp;Afficher</button>

										<div class="modal fade" id="modalForm4" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<!-- Contenu du modale -->
														<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
															<tbody><tr class="trTitreTableau">
																<td colspan="3" align="left"><strong>Formation :</strong></td>
															</tr>
															<tr>
																<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
															</tr>
															<tr>
																<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
																<td width="510">Licence Pro </td>
															</tr>
															<tr>
																<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
																<td>Act. &amp; Techniques de Communication Spéc. Développeur Web des Systèmes d'Information et Multimédia </td>
															</tr>
															<tr>
																<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
																<td> 1 an - Bac+2<br>
																</td>
															</tr>
															<tr>
																<td class="tr1"><strong>Niveau de la formation : </strong></td>
																<td>Bac+3</td>
															</tr>
															<tr>
																<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
															</tr>
															<tr>
																<td colspan="2">Contenu de la formation (connexion à une plate-forme de formation à distance):
																	Initiation au développement des applications web, Organisation de la production multimédia, Nouvelles technologies de communication,
																	Développement web 2.0, Technologie mobile, Réseaux et sécurité, Elearning, Développement de pédagogies ludiques...
																	Métiers visés : Assistant chef de projets, Chef de projets web 2.0, Rédacteur et intégrateur de
																	contenus numériques, Développeurs des applications numériques, Intégrateur web, Développeur multimédia, Webmaster, Community manager...</td>
																</tr>
																<tr>
																	<td class="tr1" colspan="2">&nbsp;</td>
																</tr>
																<tr>
																	<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
																	<td>
																		67000 STRASBOURG
																	</td>
																</tr>
																<tr>
																	<td class="tr1" colspan="2">&nbsp;</td>
																</tr>
																<tr>
																	<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 19/01/2017.</td>
																</tr>
															</tbody>
														</table>
														<!-- Contenu du modale -->
													</div>
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
									<td valign="top" height="40"><b>BTS</b>
										<br>
										Design Graphique option Communication et Médias Numériques
									</td>
									<td valign="top">
										2 ans - Bac<br>
										1 an - Bac+2<br>
									</td>

									<td valign="top" align="center">
										<br>BESANÇON (25)
									</td>
									<td align="center">
										<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm5">
											<i class="fa fa-search" aria-hidden="true"></i>
											&nbsp;Afficher</button>

											<div class="modal fade" id="modalForm5" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<!-- Contenu du modale -->

															<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
																<tbody><tr class="trTitreTableau">
																	<td colspan="3" align="left"><strong>Formation :</strong></td>
																</tr>
																<tr>
																	<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
																</tr>
																<tr>
																	<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
																	<td width="510">BTS </td>
																</tr>
																<tr>
																	<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
																	<td>Design Graphique option Communication et Médias Numériques</td>
																</tr>
																<tr>
																	<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
																	<td> 2 ans - Bac<br>
																		1 an - Bac+2<br>
																	</td>
																</tr>
																<tr>
																	<td class="tr1"><strong>Niveau de la formation : </strong></td>
																	<td>Bac+2</td>
																</tr>
																<tr>
																	<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
																</tr>
																<tr>
																	<td colspan="2">Cette formation prépare à la réalisation de produits en ligne et hors ligne, à la conception et à la conduite des projets multimédia
																		(CD-rom, sites internet, etc…). Elle s'adresse à des jeunes de 16 à 25 ans titulaires d'un Bac STD2A, d'un Bac Pro de la chaine graphique, d'un Bac général ou technologique avec une année de MANAA (mise à niveau en arts appliqués)ou d'un BTS Design Graphique option Médias Imprimés souhaitant compléter leur formation et ayant un contrat d'apprentissage. Elle nécessite des qualités de créativité, de sensibilité, de capacité à communiquer et à travailler en équipe. Il est possible de poursuivre ensuite en Licence Produits et Services Multimédia, en DSAA1, en DUT Services et réseaux de communication ou d'intégrer une école d'art. Le métier préparé est celui d'infographiste exécutant multimédia, de concepteur réalisateur multimédia ou de webdesigner. 
																		Contenu des épreuves : 
																		Projet professionnel - coef. 8 Dossier de travaux - coef. 3 Créativité réactive - coef. 3 Recherche créative - coef.3 Sciences humaines - coef. 3 Anglais - coef. 3 </td>
																	</tr>
																	<tr>
																		<td colspan="2"><strong>Taux de réussite aux diplômes :</strong> 60%</td>
																	</tr>
																	<tr>
																		<td class="tr1" colspan="2">&nbsp;</td>
																	</tr>
																	<tr>
																		<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
																		<td>
																			25000 BESANÇON
																		</td>
																	</tr>
																	<tr>
																		<td class="tr1" colspan="2">&nbsp;</td>
																	</tr>
																	<tr>
																		<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 31/05/2017.</td>
																	</tr>
																</tbody></table>

																<!-- Contenu du modale -->
															</div>
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
											<td valign="top" height="40"><b>Master 1ère et 2ème année</b>
												<br>
												Informatique Spéc. Méthodes Informatiques Appliquées à la Gestion des Entreprises
											</td>
											<td valign="top">
												2 ans - Bac+3<br>
											</td>

											<td valign="top" align="center">
												<br>MULHOUSE CEDEX (68)
											</td>
											<td align="center">
												<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm6">
													<i class="fa fa-search" aria-hidden="true"></i>
													&nbsp;Afficher</button>

													<div class="modal fade" id="modalForm6" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<!-- Contenu du modale -->

																	<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
																		<tbody><tr class="trTitreTableau">
																			<td colspan="3" align="left"><strong>Formation :</strong></td>
																		</tr>
																		<tr>
																			<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
																		</tr>
																		<tr>
																			<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
																			<td width="510">Master 1ère et 2ème année </td>
																		</tr>
																		<tr>
																			<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
																			<td>Informatique Spéc. Méthodes Informatiques Appliquées à la Gestion des Entreprises</td>
																		</tr>
																		<tr>
																			<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
																			<td> 2 ans - Bac+3<br>
																			</td>
																		</tr>
																		<tr>
																			<td class="tr1"><strong>Niveau de la formation : </strong></td>
																			<td>Bac+5</td>
																		</tr>
																		<tr>
																			<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
																		</tr>
																		<tr>
																			<td colspan="2">Contenu de la formation : Informatique de gestion (systèmes d'information, ERP, big data, …),
																				Développement d'applications (programmation objet, smartphone, Web, …), Economie-Gestion, Droit, Système et réseaux, Langues et
																				communication… Spécialisation en 2ème année : Cyber sécurité et Technologie Web...
																				Métiers visés :Ingénieur concepteur de systèmes d'information, Administrateur de bases de données, Ingénieur études et développement, Responsable / expert en sécurité, Architecte Web, Consultant informatique, chef de projets... </td>
																			</tr>
																			<tr>
																				<td class="tr1" colspan="2">&nbsp;</td>
																			</tr>
																			<tr>
																				<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
																				<td>
																					68093 MULHOUSE CEDEX
																				</td>
																			</tr>
																			<tr>
																				<td class="tr1" colspan="2">&nbsp;</td>
																			</tr>
																			<tr>
																				<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 19/01/2017.</td>
																			</tr>
																		</tbody>
																	</table>

																	<!-- Contenu du modale -->
																</div>
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
												<td valign="top" height="40"><b>Licence Pro</b>
													<br>
													Métiers de l’informatique : Conceptn Dévelopmt et Test de Logiciels, Test et qualité Logiciel (TQL)
												</td>
												<td valign="top">
													1 an - Bac+2<br>
												</td>

												<td valign="top" align="center">
													<br>LAVAL CEDEX (53)
												</td>
												<td align="center">
													<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm4">
														<i class="fa fa-search" aria-hidden="true"></i>
														&nbsp;Afficher</button>

														<div class="modal fade" id="modalForm4" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">&times;</span>
																		</button>
																	</div>
																	<div class="modal-body">
																		<!-- Contenu du modale -->
																		<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
																			<tbody><tr class="trTitreTableau">
																				<td colspan="3" align="left"><strong>Formation :</strong></td>
																			</tr>
																			<tr>
																				<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
																			</tr>
																			<tr>
																				<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
																				<td width="510">Licence Pro </td>
																			</tr>
																			<tr>
																				<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
																				<td>Act. &amp; Techniques de Communication Spéc. Développeur Web des Systèmes d'Information et Multimédia </td>
																			</tr>
																			<tr>
																				<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
																				<td> 1 an - Bac+2<br>
																				</td>
																			</tr>
																			<tr>
																				<td class="tr1"><strong>Niveau de la formation : </strong></td>
																				<td>Bac+3</td>
																			</tr>
																			<tr>
																				<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
																			</tr>
																			<tr>
																				<td colspan="2">Contenu de la formation (connexion à une plate-forme de formation à distance):
																					Initiation au développement des applications web, Organisation de la production multimédia, Nouvelles technologies de communication,
																					Développement web 2.0, Technologie mobile, Réseaux et sécurité, Elearning, Développement de pédagogies ludiques...
																					Métiers visés : Assistant chef de projets, Chef de projets web 2.0, Rédacteur et intégrateur de
																					contenus numériques, Développeurs des applications numériques, Intégrateur web, Développeur multimédia, Webmaster, Community manager...</td>
																				</tr>
																				<tr>
																					<td class="tr1" colspan="2">&nbsp;</td>
																				</tr>
																				<tr>
																					<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
																					<td>
																						67000 STRASBOURG
																					</td>
																				</tr>
																				<tr>
																					<td class="tr1" colspan="2">&nbsp;</td>
																				</tr>
																				<tr>
																					<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 19/01/2017.</td>
																				</tr>
																			</tbody>
																		</table>
																		<!-- Contenu du modale -->
																	</div>
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
					<td valign="top" height="40"><b>BTS</b>
						<br>
						Design Graphique option Communication et Médias Numériques
					</td>
					<td valign="top">
						2 ans - Bac<br>
						1 an - Bac+2<br>
					</td>

					<td valign="top" align="center">
						<br>BESANÇON (25)
					</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm1">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalForm1" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
												<tbody><tr class="trTitreTableau">
													<td colspan="3" align="left"><strong>Formation :</strong></td>
												</tr>
												<tr>
													<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
												</tr>
												<tr>
													<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
													<td width="510">BTS </td>
												</tr>
												<tr>
													<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
													<td>Design Graphique option Communication et Médias Numériques</td>
												</tr>
												<tr>
													<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
													<td> 2 ans - Bac<br>
														1 an - Bac+2<br>
													</td>
												</tr>
												<tr>
													<td class="tr1"><strong>Niveau de la formation : </strong></td>
													<td>Bac+2</td>
												</tr>
												<tr>
													<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
												</tr>
												<tr>
													<td colspan="2">Cette formation prépare à la réalisation de produits en ligne et hors ligne, à la conception et à la conduite des projets multimédia
														(CD-rom, sites internet, etc…). Elle s'adresse à des jeunes de 16 à 25 ans titulaires d'un Bac STD2A, d'un Bac Pro de la chaine graphique, d'un Bac général ou technologique avec une année de MANAA (mise à niveau en arts appliqués)ou d'un BTS Design Graphique option Médias Imprimés souhaitant compléter leur formation et ayant un contrat d'apprentissage. Elle nécessite des qualités de créativité, de sensibilité, de capacité à communiquer et à travailler en équipe. Il est possible de poursuivre ensuite en Licence Produits et Services Multimédia, en DSAA1, en DUT Services et réseaux de communication ou d'intégrer une école d'art. Le métier préparé est celui d'infographiste exécutant multimédia, de concepteur réalisateur multimédia ou de webdesigner. 
														Contenu des épreuves : 
														Projet professionnel - coef. 8 Dossier de travaux - coef. 3 Créativité réactive - coef. 3 Recherche créative - coef.3 Sciences humaines - coef. 3 Anglais - coef. 3 </td>
													</tr>
													<tr>
														<td colspan="2"><strong>Taux de réussite aux diplômes :</strong> 60%</td>
													</tr>
													<tr>
														<td class="tr1" colspan="2">&nbsp;</td>
													</tr>
													<tr>
														<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
														<td>
															25000 BESANÇON
														</td>
													</tr>
													<tr>
														<td class="tr1" colspan="2">&nbsp;</td>
													</tr>
													<tr>
														<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 31/05/2017.</td>
													</tr>
												</tbody></table>

												<!-- Contenu du modale -->
											</div>
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
					<td valign="top" height="40"><b>BTS</b>
						<br>
						Design Graphique option Communication et Médias Numériques
					</td>
					<td valign="top">
						2 ans - Bac<br>
						1 an - Bac+2<br>
					</td>

					<td valign="top" align="center">
						<br>BESANÇON (25)
					</td>
					<td align="center">
						<button type="button" class="btn btn-primary btn-lg btnAffiche" data-toggle="modal" data-target="#modalForm1">
							<i class="fa fa-search" aria-hidden="true"></i>
							&nbsp;Afficher</button>

							<div class="modal fade" id="modalForm1" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Formation</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<!-- Contenu du modale -->
											
											<table class="tableauForum" width="700px" cellspacing="0" border="0" align="center">
												<tbody><tr class="trTitreTableau">
													<td colspan="3" align="left"><strong>Formation :</strong></td>
												</tr>
												<tr>
													<td class="tr_cache" colspan="2"><p align="center"><strong>Les coordonnées du centre de formation ne sont visibles que par les internautes inscrits sur le site de France apprentissage. Cette inscription est gratuite et sans engagement.</strong><br></p></td>
												</tr>
												<tr>
													<td class="tr1" width="186"><strong>Intitulé du diplôme ou du titre : </strong></td>
													<td width="510">BTS </td>
												</tr>
												<tr>
													<td class="tr1"><strong>Intitulé de la filière  : </strong></td>
													<td>Design Graphique option Communication et Médias Numériques</td>
												</tr>
												<tr>
													<td class="tr1" valign="top"><strong>Durée de la formation &amp; Prérequis : </strong></td>
													<td> 2 ans - Bac<br>
														1 an - Bac+2<br>
													</td>
												</tr>
												<tr>
													<td class="tr1"><strong>Niveau de la formation : </strong></td>
													<td>Bac+2</td>
												</tr>
												<tr>
													<td colspan="2" class="tr1"><strong>Contenu de la formation et descriptif métiers :</strong></td>
												</tr>
												<tr>
													<td colspan="2">Cette formation prépare à la réalisation de produits en ligne et hors ligne, à la conception et à la conduite des projets multimédia
														(CD-rom, sites internet, etc…). Elle s'adresse à des jeunes de 16 à 25 ans titulaires d'un Bac STD2A, d'un Bac Pro de la chaine graphique, d'un Bac général ou technologique avec une année de MANAA (mise à niveau en arts appliqués)ou d'un BTS Design Graphique option Médias Imprimés souhaitant compléter leur formation et ayant un contrat d'apprentissage. Elle nécessite des qualités de créativité, de sensibilité, de capacité à communiquer et à travailler en équipe. Il est possible de poursuivre ensuite en Licence Produits et Services Multimédia, en DSAA1, en DUT Services et réseaux de communication ou d'intégrer une école d'art. Le métier préparé est celui d'infographiste exécutant multimédia, de concepteur réalisateur multimédia ou de webdesigner. 
														Contenu des épreuves : 
														Projet professionnel - coef. 8 Dossier de travaux - coef. 3 Créativité réactive - coef. 3 Recherche créative - coef.3 Sciences humaines - coef. 3 Anglais - coef. 3 </td>
													</tr>
													<tr>
														<td colspan="2"><strong>Taux de réussite aux diplômes :</strong> 60%</td>
													</tr>
													<tr>
														<td class="tr1" colspan="2">&nbsp;</td>
													</tr>
													<tr>
														<td class="tr1" valign="top"><strong>Lieu de la formation : </strong></td>
														<td>
															25000 BESANÇON
														</td>
													</tr>
													<tr>
														<td class="tr1" colspan="2">&nbsp;</td>
													</tr>
													<tr>
														<td class="tr0" colspan="2" align="center">Cette formation a été mise à jour le 31/05/2017.</td>
													</tr>
												</tbody></table>

												<!-- Contenu du modale -->
											</div>
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

<!-- FOOTER -->
<footer>
    
    <p>ScrapSearch &copy 2017 | <a href="Mentions Légales" class="ML"> Mentions légales </a></p>
    
</footer>
<!-- FOOTER -->
