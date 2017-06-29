<?php
include_once('inc_bdd.php');

$query = $db->query('SELECT * FROM utilisateur');
$result = $query->fetchAll();

for($i=0;$i<count($result);$i++)
{
	$a=$result[$i];
	foreach($a as $index => $value)
	{
		echo  "index : ".$index." valeur : ".$value;
		echo "<br/>";
	}
}

?>