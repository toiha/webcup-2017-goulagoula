<?php
	try {
        $dbh = new PDO('mysql:host=mayotte.goulagoula.webcup.fr;dbname=goulagoula', "goulagoula", "[BGbKJb63OF]");
		if(!empty($_POST)){
			$stmt = $dbh->prepare("INSERT INTO formulaire (nom, prenom, sujet, message) VALUES(:nom, :prenom, :sujet, :message)");
			$stmt->bindParam(':nom', $_POST['nom']);
			$stmt->bindParam(':prenom', $_POST['prenom']);
			$stmt->bindParam(':sujet', $_POST['sujet']);
			$stmt->bindParam(':message', $_POST['message']);
			$stmt->execute();
			header('Location: /?contact=ok');
		}
		$dbh = null;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
?>