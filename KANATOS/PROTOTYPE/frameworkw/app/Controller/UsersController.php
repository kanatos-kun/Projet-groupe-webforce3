<?php


namespace Controller;
use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use Model\UsersModel;

class UsersController extends Controller
{

	public function dashboard()
	{
		$this->show('users/Dashboard_utilisateur');
	}


}
