<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'chatbox');

	include_once('inc_bdd.php');


if(!empty($_POST['id'])){ // on vérifie que l'id est bien présent et pas vide
    $id = (int) $_POST['id']; // on s'assure que c'est un nombre entier
    // on récupère les messages ayant un id plus grand que celui donné
    $query = $db->prepare('SELECT * FROM users WHERE id > :id ORDER BY id DESC');
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    $query->execute();
    $result = $query->fetchAll();
    $message = json_encode($result);
    // $message = null;
    // // on inscrit tous les nouveaux messages dans une variable
    // foreach($result as $row){
    //     $message .= "<p id=\"" . $row['id'] . "\"><strong>" . $row['pseudo'] . " dit :</strong> " . $row['message'] . "</p>";
    // }
    echo $message; // enfin, on retourne les messages à notre script JS
}

?>