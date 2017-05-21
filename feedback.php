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
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col s2">
                            <img src="img/logo2.png" class="logo-site">
                        </div>
                        <div class="col s10">
                            <h1> <span class="titre-site"></span></h1>        
                            <h3 class="slogan-site"></h3>        
                        </div>
                    </div>
                </div>
            </section>
            <section>
            <?php 

                try{
                    $dbh = new PDO('mysql:host=localhost;dbname=goulagoula;charset=utf8', 'root', '');
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $sth = $dbh->prepare("SELECT * FROM mini_chat");
                    $sth->execute();
                    $feedbacks = $sth->fetchAll();
                }
                catch(Exception $e){
                    die('Erreur : '.$e->getMessage());
                }
        
            ?>
                <div class="container">
                     <ul class="collection">
                     <?php foreach ($feedbacks as $key => $feedback): ?>
                        <li class="collection-item avatar">
                            <strong class="title"><?= $feedback['pseudo'] ?></strong>
                            <p><?= $feedback['message'] ?></p>
                          <!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
                        </li>
                     <?php endforeach ?>
                    </ul>
                </div>
            </section>
        </div>
        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            <a class="btn waves-effect waves-light" href="/">Accueil</a>
            <a class="btn waves-effect waves-light">Galerie</a>
            <a class="btn waves-effect waves-light">Contact</a>
            <a class="btn waves-effect waves-light">A propos</a>
            <a class="btn waves-effect waves-light">Evaluer nos univers</a>
            <a class="btn waves-effect waves-light" href="feedback.php">FeedBack</a>
            <p>© 2014 Copyright Text </p>
            
            </div>
          </div>
        </footer>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <!-- <script type="text/javascript" src="js/init.js"></script> -->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/typeit.min.js"></script>
        <script src="js/TweenLite_w.min.js"></script>
        <script src="js/EasePack_w.min.js"></script>
        <script src="js/rAF_w.js"></script>
        <script src="js/canva.js"></script>
        <script>

            $(document).ready(function () {

                $('.titre-site').typeIt({
                    speed: 50,
                    lifeLike: false,
                    autoStart: false,
                })
                .tiType('FeedBack')
                .tiSettings({speed: 50})
                .tiType(' Androla')
                .tiDelete(2)
                .tiType('idLand');
            });
        </script>
    </body>
</html>