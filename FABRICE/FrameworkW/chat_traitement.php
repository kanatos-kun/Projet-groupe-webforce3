<?php

	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'chatbox');

	include_once('inc_bdd.php');
if(isset($_POST['envoyer']))
{
	if (!empty($_POST['pseudo']) && !empty($_POST['message']))
	{

		$pseudo = $_POST['pseudo'];
		$message = $_POST['message'];

		$insert = $db->prepare('INSERT INTO users (id, pseudo, message) VALUES (NULL, :pseudo, :message)');
		
		$insert->bindValue(':pseudo', $pseudo, PDO::PARAM_INT);
		$insert->bindValue(':message', strip_tags($message), PDO::PARAM_STR);
		$insert->execute();

	}
	else
	{
		echo "Vous avez oublié de remplir un champ !";
	}
}

?>