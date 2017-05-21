<?php 

$errors = [];
	foreach ($_POST as $key => $value) {
		if(empty($value)){
			$errors[] = $key;
		}
	}

	if(!empty($errors)){
		try{
            $pdo = new PDO('mysql:host=localhost;dbname=goulagoula;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
		
		$execute_ok = false;
		if(isset($_POST['egypte_sejour_validation'])){
			$req = $pdo->prepare('INSERT INTO reserv_sejour (debut, fin, hotel, nb_room, nb_adulte, nb_enfant) VALUES(?, ?, ?, ?, ?, ?)');
			unset($_POST['egypte_sejour_validation']);
	        $execute_ok = $req->execute($_POST);
		}

		if( $execute_ok ){
			header('Location: index.php');
			exit;
		}
	}else{
		var_dump($errors);		die;
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