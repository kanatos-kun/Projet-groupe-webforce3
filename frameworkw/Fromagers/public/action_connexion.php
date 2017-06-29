<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'base_de_donnee_projet_wf3');

	include_once('inc_bdd.php');

	if (isset($_POST['umail']) && !empty($_POST['umail']) &&
		isset($_POST['psw']) && !empty($_POST['psw']) ) {
		$query = $db->prepare('SELECT nom, prenom FROM utilisateur WHERE email = ? AND mot_de_passe = ?');

		$query -> bindValue(1, $_POST['umail'], PDO::PARAM_STR);
		$query -> bindValue(2, md5($_POST['psw']), PDO::PARAM_STR);

		$query->execute();
		$result = $query->fetchAll();
		$nb = $query->rowCount();
		if ($nb>0) {
			echo "Email confirmé";
		}
		else{
			echo "Email inexistant";
		}
	}


?>