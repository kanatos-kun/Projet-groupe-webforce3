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

		$user = new UsersModel();

		// regarde si les données envoyées sont correct.
		extract($this->validateRegistration($user),EXTR_OVERWRITE);
		extract($this->validateLog($user),EXTR_OVERWRITE);

		if($checkMailReg && $checkPswReg)
		{
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
		else if ($checkMailLog && $checkPswLog) {
			$id = $user->getId(["email"=>$_POST['log-email']]);
			$pswArray = $user->getPswTable(["utilisateur_id" => $id]);
			$testDonne = hash_pbkdf2('sha1', $_POST['log-psw'], $pswArray['salt'], $pswArray['iteration'] ,$pswArray['longueur'] = 64 ,$raw_output = false);

			if($testDonne == $pswArray['mot_de_passe'])
			{
			  $this->redirectToRoute('default_profil');
			}
			else
			{
				$errLog .= $id;
				$this->show('default/home',[
											"errReg"   => $errReg,
											"errLog"   => $errLog
										   ]);
			}
		}
		else
		{
			$this->show('default/home',[
										"errReg"   => $errReg,
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



	//***********************************************
	//               Fonction tierce
	//***********************************************
	public function validateRegistration($user)
	{
		$errReg="";
		$checkMailReg=false;
		$checkPswReg=false;

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
				$checkMailReg = true;
	 }
	 else if(!isset($_POST['reg-email']))
	 {

	 }
	 else
	 {
		 $errReg .= " sub::(pb au niveau du mail)";
	 }

			if(isset($_POST['reg-psw']) &&
				!empty($_POST['reg-psw']) &&
				strlen($_POST['reg-psw'])>7 &&
				$_POST['reg-psw'] == $_POST['reg-psw-repeat']
		)
		{
				$checkPswReg = true;
		}
		else if(!isset($_POST['reg-psw']))
		{

		}
		else
		{
			 $errReg .= " sub::(pb au niveau du mot de passe)";
		}

		$pkg = array( "checkPswReg"  => $checkPswReg,
	 								"checkMailReg" => $checkMailReg,
								  "errReg"       => $errReg);
		return $pkg;
	}

	public function validateLog($user)
	{
		$errLog="";
		$checkMailLog=false;
		$checkPswLog=false;
		//-------------------------------------------
		// Gestion de la connexion
		//-------------------------------------------
		if(isset($_POST['log-email']) &&
			 !empty($_POST['log-email']) &&
			 filter_var($_POST['log-email'],FILTER_VALIDATE_EMAIL) &&
       $user->checkMail($_POST['log-email'])
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
			strlen($_POST['log-psw'])>7
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
		$pkg = array( "checkPswLog"  => $checkPswLog,
	 								"checkMailLog" => $checkMailLog,
								  "errLog"       => $errLog);
		return $pkg;
	}


}
