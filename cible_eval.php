<?php 

	try{
$dbh = new PDO('mysql:host=mayotte.goulagoula.webcup.fr;dbname=goulagoula', "goulagoula", "[BGbKJb63OF]");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

	$sth = $pdo->prepare('INSERT INTO mini_chat(pseudo, message) VALUES(:pseudo,:message)');

	$errors = [];
	foreach ($_POST as $key => $field) {
		if($field == ""){
			$errors[] = $key;
		}
	}

	if(empty($errors)){
		$sth->bindParam(':pseudo', $_POST['pseudo']);
		$sth->bindParam(':message', $_POST['message']);
	    $execute_ok = $sth->execute();
    	header('Location: /?eval=ok');
	}else{
		header('Location: /?eval=not_ok');
	}


?>