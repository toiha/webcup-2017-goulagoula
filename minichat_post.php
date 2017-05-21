<?php

// Connexion à la base de données

try

{

$dbh = new PDO('mysql:host=mayotte.goulagoula.webcup.fr;dbname=goulagoula', "goulagoula", "[BGbKJb63OF]");

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message']));


// Redirection du visiteur vers la page du minichat

header('Location: minichat.php');

?>