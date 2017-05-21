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
                <div class="container center-align">
                    <div class="">
                        <h1><i class="fa fa-android "></i> <span class="titre-site"></span></h1>        
                        <h3 class="slogan-site"></h3>        
                    </div>
                </div>

                </section>
        </div>
        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            <a class="btn waves-effect waves-light">Galerie</a>
            <a class="btn waves-effect waves-light">Contact</a>
            <a class="btn waves-effect waves-light">A propos</a>
            <a class="btn waves-effect waves-light">Evaluer nos univers</a>
            <p>© 2014 Copyright Text <a class="grey-text text-lighten-4 right" href="#!">More Links</a></p>
            
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
                $('.univers').hide();

                $('.titre-site').typeIt({
                    speed: 50,
                    lifeLike: false,
                    autoStart: false,
                    callback: function () {
                        $('.univers').show();
                        $('.univers1').addClass('animated fadeInLeft');
                        $('.univers2').addClass('animated fadeInUp');
                        $('.univers3').addClass('animated fadeInRight');

                    }
                })
                        .tiType('Bienvenue')
                        .tiSettings({speed: 50})
                        .tiType(' à Androla')
                        .tiDelete(2)
                        .tiType('idLand');

                $('.modal').modal();
                $('ul.tabs').tabs();
                // $('.carousel.carousel-slider').carousel({fullWidth: true, duration: 100});

                // $('.carousel.carousel-slider').carousel({fullWidth: true});

                  $('.linkScroll').bind('click.smoothscroll',function (e) {
                    e.preventDefault();
                    var target = this.hash,
                        $target = $(target);

                    $('html, body').stop().animate( {
                      'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                      window.location.hash = target;
                    } );
                  } );
            });
        </script>
    </body>
</html>