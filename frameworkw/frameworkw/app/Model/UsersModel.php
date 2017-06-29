<?php
namespace Model;

class UsersModel extends \W\Model\UsersModel
{
	public static $err = false;

	public function checkMail($email)
	{
		return $this->emailExists($email);
	}

	public function getUser($username)
	{
		return $this-> getUserByUsernameOrEmail($username);
	}

	public function getId($mail)
	{
		$this->setPrimaryKey('id');
		return $this->search($mail)[0]['id'];
	}

	public function addUser($user)
	{
		$this->setPrimaryKey("id");
		$this->insert($user);
	}

	public function addPsw($psw)
	{
		$this->setPrimaryKey("utilisateur_id");
		$this->setTable("mot_de_passe");
		$this->insert($psw);
	}

	public function getPswTable($id)
	{
		$this->setPrimaryKey("utilisateur_id");
		$this->setTable("mot_de_passe");
		return $this->search($id)[0];
	}

	public function hashPsw($psw)
	{
		if(strlen($psw) > 7)
		{
			$X = rand(64000, 128000);
			$I = rand(1, $X);
			$passLenght=strlen($psw);
			$char  = "";
			$char .="abcdefghijklmnopqrstuvwxyz";
			$char .="ABCDEFGHIJKLMONPQRSTUVWXYZ";
			$char .= '0123456789';
			$char .= '@/-+*$?!:#&=';
			$salt  = str_shuffle($char);
			$salt  = substr($salt,$passLenght,$passLenght);

			$hashed = hash_pbkdf2('sha1', $psw, $salt, $I ,$length = 64 ,$raw_output = false);
			$pkg = array( "mot_de_passe"    => $hashed ,
										"salt"      => $salt ,
										"iteration" => $I ,
										"longueur"  => $passLenght
									);
			return $pkg;
		}
		else
		{
			self::$err = "le mots de passe est incorrect!";
		}

	}

}
