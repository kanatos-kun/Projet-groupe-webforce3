<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'chatbox');

	include_once('inc_bdd.php');

		$query = $db->prepare("SELECT * FROM users ORDER BY id DESC LIMIT 0,12");
		$query->execute();
		$result = $query->fetchAll();
		foreach($result as $row)
		{
			echo "<p id=\"".$row['id'] . "\"><strong>" . $row['pseudo'] . " dit : </strong>" . $row['message'] . "</p>";
		}

?>