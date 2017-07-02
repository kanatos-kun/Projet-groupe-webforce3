<?php
namespace Model;

class MotdepasseModel extends \W\Model\Model
{
	public function addPsw($psw)
	{
		$this->setPrimaryKey("utilisateur_id");
		$this->setTable("mot de passe");
		$this->insert($psw,true);
	}
}
