<?php

// on se connecte à notre base de données
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '');

}
catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}
if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire


    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){ // si les variables ne sont pas vides

        $pseudo = mysql_real_escape_string($_POST['pseudo']);

        $message = mysql_real_escape_string($_POST['message']); // on sécurise nos données


        // puis on entre les données en base de données :

        $insertion = $bdd->prepare('INSERT INTO messages(pseudo,message) VALUES(:pseudo, :message)');

        $insertion->execute(array(

            ':pseudo' => $pseudo,

            ':message' => $message

        ));

        $query = $bdd->prepare('SELECT * FROM messages ORDER BY id DESC');
        $query-> execute();
        $id = $query->fetch();
        echo "id=\"".$id['id']."\"";
    }

    else{

        print_r("Vous avez oublié de remplir un des champs !");

    }
}
?>