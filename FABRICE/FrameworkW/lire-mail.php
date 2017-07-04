

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
					<h3>53<sup style="font-size: 20px">%</sup></h3>

					<p>Projets</p>
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
					<h3>65</h3>

					<p>Dernières visites</p>
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
					<h3>53<sup style="font-size: 20px">%</sup></h3>

					<p>Intérêt</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer minFooter">Plus d'infos <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

	</section>
<!-- SECTION 1 -->



</body>

<footer>
    
    <p>ScrapSearch &copy 2017 | <a href="Mentions Légales" class="ML"> Mentions légales </a></p>
    
</footer>

