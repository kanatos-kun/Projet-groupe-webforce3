<?php

// initialization des variables
$boolCheck = true;

include_once('inc_bdd.php');

//On verifie dans la table si les valeurs de la super variable POST on été definie
foreach($_POST as $index => $value)
{
	if(!(isset($_POST[$index])) || empty($_POST[$index]))
	{
		$boolCheck = false;
		break;
	}
	// echo "<p>".$_POST[$index]."</p>";
}

//on fait une deuxieme verification pour verifier sur les deux mots de passe et les deux mail sont les mêmes
if($boolCheck)
{
	if($_POST['email'] != $_POST['email-repeat'] &&
	   $_POST['psw' ] != $_POST['psw-repeat'] )
	{
		$boolCheck = false;
	}
}

// On execute le code si il n'y a pas d'erreur
if($boolCheck)
{

	$pwd = md5($_POST['psw']);

	$query = $db->prepare('INSERT INTO utilisateur(email,mot_de_passe)
					       VALUES(:MAIL,:MOT_DE_PASSE)');
	$query -> bindValue(':MAIL',$_POST['email'],PDO::PARAM_STR);
	$query -> bindValue(':MOT_DE_PASSE',$pwd,PDO::PARAM_STR);
	$query -> execute();

}
else
{
	echo "Un des champs n'a pas été remplie correctement";
}

?>