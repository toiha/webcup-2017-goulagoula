<?php 
	
	$errors = [];
	foreach ($_POST as $key => $value) {
		if($value == ""){
			$errors[] = $key;
		}
	}

	if(empty($errors)){
		try{
            $pdo = new PDO('mysql:host=localhost;dbname=goulagoula;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
		$sth = $pdo->prepare('INSERT INTO reserv_sejour (debut, fin, hotel, nb_room, nb_adulte, nb_enfant, univers) VALUES(:debut, :fin, :hotel, :nb_room, :nb_adulte, :nb_enfant, :univers)');

		$sth->bindParam(':debut', $_POST['debut_sejour']);
		$sth->bindParam(':fin', $_POST['fin_sejour']);
		$sth->bindParam(':hotel', $_POST['hotel']);
		$sth->bindParam(':nb_room', $_POST['nb_room']);
		$sth->bindParam(':nb_adulte', $_POST['nb_adulte']);
		$sth->bindParam(':nb_enfant', $_POST['nb_child']);
		$sth->bindParam(':univers', $_POST['univers']);

	    $sth->execute();
    	header('Location: /?eval=ok');
	}else{
		header('Location: /?eval=not_ok');
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/animate.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
    </head>

    <body class="">

        <div id="large-page" class="large-page">
            <canvas id="goula-canvas"></canvas>
        </div>
        <!-- <body class="blue lighten-4"> -->
        <div class="page">
	        <div class="spin-wrapper">
			  	<div class="preloader-wrapper big active">
			    <div class="spinner-layer spinner-blue-only">
			      <div class="circle-clipper left">
			        <div class="circle"></div>
			      </div><div class="gap-patch">
			        <div class="circle"></div>
			      </div><div class="circle-clipper right">
			        <div class="circle"></div>
			      </div>
			    </div>
			  </div>
			</div>
        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <!-- <script type="text/javascript" src="js/init.js"></script> -->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/typeit.min.js"></script>
        <script src="js/TweenLite_w.min.js"></script>
        <script src="js/EasePack_w.min.js"></script>
        <script src="js/rAF_w.js"></script>
        <script src="js/canva.js"></script>
    </body>
</html>