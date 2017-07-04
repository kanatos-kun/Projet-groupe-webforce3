<?php
/* Script */
	
	$db_options = array( 
						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
						PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
						PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
);

try
{ 

	$db = new PDO('mysql:host='.HOST.';dbname='.DB,
					USER,
					PASS,
					$db_options);

	/* sans les accent et doublons */
	// $db = new PDO('mysql:host=localhost;dbname=boutique_wf3','root',''
	// 	);

}
catch (Exception $e)
{	

	echo '['.$e->getCode().']'.$e->getMessage();
	// error_log('['.$e->getCode().'] '.$e->getMessage(), 3, 'logs/mysqlerrors.log');  
	//affichage d'une erreur le cas échéant

}
	

?>
