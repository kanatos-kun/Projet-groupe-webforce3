<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$data = [
			"css" => [
							"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800",
							"TOTOR/css/bootstrap.min.css",
							"TOTOR/css/font-awesome.css",
							"TOTOR/css/main.css",
							"TOTOR/css/footer.css",
							"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css",
							"TOTOR/css/assets/css/style.css",
							"TOTOR/css/templatemo_style.css"
						],
			"js"  => [
							"TOTOR/assets/js/jquery-3.2.1.js",
							"TOTOR/js/vendor/jquery-1.11.0.min.js",
							"TOTOR/js/bootstrap.js",
							"TOTOR/js/plugin.js",
							"TOTOR/js/main.js",
							"TOTOR/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"
					],
			"img" => [

					]
		];

		$JSON = json_encode($data);
		$this->show('default/home',["json" => "aa"]);
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
