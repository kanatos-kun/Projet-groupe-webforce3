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
		 // Gestion de l'inscription'
		 //-------------------------------------------
 		if(isset($_POST['reg-email']) &&
 		   !empty($_POST['reg-email']) &&
 			 filter_var($_POST['reg-email'],FILTER_VALIDATE_EMAIL) &&
 			 $_POST['reg-email'] == $_POST['reg-email-repeat'] &&
			 !$user->checkMail($_POST['reg-email'])
 			 )
 		{
 				 $checkMailSub = true;
 		}
		else if(!isset($_POST['reg-email']))
		{

		}
 		else
 		{
 			$errSub .= " sub::(pb au niveau du mail)";
 		}

 			 if(isset($_POST['reg-psw']) &&
 	 		   !empty($_POST['reg-psw']) &&
 	 			 strlen($_POST['reg-psw'])>7 &&
 				 $_POST['reg-psw'] == $_POST['reg-psw-repeat']
 		 )
 		 {
 	 			 $checkPswSub = true;
 		 }
		 else if(!isset($_POST['reg-psw']))
		 {

		 }
		 else
		 {
				$errSub .= " sub::(pb au niveau du mot de passe)";
		 }


		if($checkMailSub && $checkPswSub)
		{
			$clPwd = new MotdepasseModel();
			$session = new AuthentificationModel();

			$arrayPsw = $user->hashPsw($_POST['reg-psw']);
			$psw = $arrayPsw['mot_de_passe'];
			$arrayUser = array(
					"email"        => $_POST['reg-email'],
					"mot_de_passe" => $psw
			);

			$user->addUser($arrayUser);
			$id = $user->getId(["email"=>$_POST['reg-email']]);
			$arrayPsw["utilisateur_id"]= $id;
			$user->addPsw($arrayPsw);
			$this->redirectToRoute('default_dashboard');
			//$this->show('default/Dashboard_utilisateur',["test" => $id]);
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


//***********************************************
//               Fonction tierce
//***********************************************
private function validateRegistration()
{
	$errLog="";
	$checkMailLog=true;
	$checkPswLog=true;
	//-------------------------------------------
	// Gestion de la connexion
	//-------------------------------------------
	if(isset($_POST['log-email']) &&
		 !empty($_POST['log-email']) &&
		 filter_var($_POST['log-email'],FILTER_VALIDATE_EMAIL)
		 )
	{
			 $checkMailLog = true;
	}
	else if(!isset($_POST['log-email']))
	{

	}
	else
	{
		$errLog .= " log::(pb au niveau du mail)";
	}

	if(isset($_POST['log-psw']) &&
		!empty($_POST['log-psw']) &&
		strlen($_POST['log-psw'])>7 &&
		$_POST['log-psw'] == $_POST['psw-repeat']
	)
	{
			$checkPswLog = true;
	}
	else if(!isset($_POST['log-psw']))
	{

	}
	else
	{
		 $errLog .= " log::(pb au niveau du mot de passe)";
	}
	$pkg = array( "checkPswLog" => $checkPswLog,
 								"checkMailLog" => $checkMailLog);
	return $errLog;
}

private function validateLog()
{

}
