<?php

namespace Controller;
use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use Model\UsersModel;
use Model\MotdepasseModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{

		$asset = [
			"css" => [
									[
										"link" => "absolute",
										"url" =>"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/css/bootstrap.min.css"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/css/font-awesome.css"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/css/main.css"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/css/footer.css"
									],
									[
										"link" => "absolute",
										"url" => "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/assets/css/style.css"
									]
						],
			"js"  => [
									[
										"link" => "relative",
										"url" => "TOTOR/js/bootstrap.js"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/js/plugins.js"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/js/main.js"
									],
									[
										"link" => "relative",
										"url" => "TOTOR/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"
									]
					],
			"img" => [
							"logo" => "TOTOR/images/logo2.png",
							"slider-showcase" => [
																		"TOTOR/images/slide.jpg",
																	  "TOTOR/images/slide4.jpg",
																	  "TOTOR/images/slide5.jpg"
																	],
							"affiche" => "TOTOR/images/tt.jpg",
							"last-member" => [
																	"TOTOR/images/d.jpg"
															 ]
					     ]
		];

		// Variable
		$checkMailSub=false;
		$checkPswSub =false;
		$checkMailLog=false;
		$checkPswLog =false;
		$errLog="";
		$errSub="";
		$user = new UsersModel();

		// regarde si les données envoyées sont correct.

		//-------------------------------------------
		// Gestion de la connexion
		//-------------------------------------------
		if(isset($_POST['email']) &&
		   !empty($_POST['email']) &&
			 filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) &&
			 !$user->checkMail($_POST['email'])
			 )
		{
				 $checkMailLog = true;
		}
		else
		{
			$errSub = "Un des champs est incorrect";
		}

			 if(isset($_POST['psw']) &&
	 		   !empty($_POST['psw']) &&
	 			 strlen($_POST['psw'])>7 &&
				 $_POST['psw'] == $_POST['psw-repeat']
		 )
		 {
	 			 $checkPswLog = true;
		 }
		 else
  	 {
  		  $errSub = "Un des champs est incorrect";
  	 }

		 //-------------------------------------------
		 // Gestion de l'inscription'
		 //-------------------------------------------
 		if(isset($_POST['email']) &&
 		   !empty($_POST['email']) &&
 			 filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) &&
 			 $_POST['email'] == $_POST['email-repeat'] &&
 			 $user->checkMail($_POST['email'])
 			 )
 		{
 				 $checkMailSub = true;
 		}
 		else
 		{
 			$errSub = "Un des champs est incorrect";
 		}

 			 if(isset($_POST['psw']) &&
 	 		   !empty($_POST['psw']) &&
 	 			 strlen($_POST['psw'])>7 &&
 				 $_POST['psw'] == $_POST['psw-repeat']
 		 )
 		 {
 	 			 $checkPswSub = true;
 		 }
		 else
		 {
				$errSub = "Un des champs est incorrect";
		 }


		if($checkMailSub && $checkPswSub)
		{
			$session = new AuthentificationModel();
			$clPwd = new MotdepasseModel();
			$array = $user->hashPsw();
			$psw = $array['hashed'];
			$user->addUser();
			$clPwd->addPsw($psw);
			$id = $session->isValidLoginInfo($_POST['email'],$_POST['psw']);
			$user->addPsw($id);
			$this->redirectToRoute('default_dashboard');
		}
		else
		{
			$this->show('default/home',["asset"    => $asset,
																	"errSub"   => $errSub,
																	"errLog"   => $errLog
																 ]);
		}
	}

	public function projet()
	{
		$this->show('default/projets');
	}

	public function profil()
	{
		$this->show('default/profil');
	}

	public function propos()
	{
		$this->show('default/propos');
	}

	public function premium()
	{
		$this->show('default/avantagespremium');
	}

	public function dashboard()
	{
		$this->show('default/Dashboard_utilisateur');
	}

}
