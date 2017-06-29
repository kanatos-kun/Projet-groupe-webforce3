<?php
namespace Model;

class MotdepasseModel extends \W\Model\Model
{
	public function addPsw($psw)
	{
		$this->setPrimaryKey("utilisateur_id");
		$this->setTable("mot_de_passe");
		$this->insert($psw);
	}
}
