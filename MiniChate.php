<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>like-etoil</title>
<style>

    form

    {

        text-align:center;

    }

    </style>

    </head>
<body>
    <form method="post">

    <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br /><br />

        <label for="message">Message</label>: <input type="textarea" name="message" id="message" /><br /><br />

        <input type="submit" value="Envoyer" name="valide_chat" />

    </p>

    </form>
    <center>
        <div class="rating rating2"><!--
		--><a href="#5" title="Give 5 stars">★</a><!--
		--><a href="#4" title="Give 4 stars">★</a><!--
		--><a href="#3" title="Give 3 stars">★</a><!--
		--><a href="#2" title="Give 2 stars">★</a><!--
		--><a href="#1" title="Give 1 star">★</a>
</div>
    </center>
    <center>
        <div>

        <?php

        // Connexion à la base de données

        try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=goulagoula;charset=utf8', 'root', '');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }

        if (isset($_POST['valide_chat'])) {
            $req = $bdd->prepare('INSERT INTO mini_chat (pseudo, message) VALUES(?, ?)');
            $req->execute(array($_POST['pseudo'], $_POST['message']));
        }


        // Récupération des 10 derniers messages

        $reponse = $bdd->query('SELECT pseudo, message FROM mini_chat ORDER BY ID DESC LIMIT 0, 10');




        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

        while ($donnees = $reponse->fetch())

        {

            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';

        }


        $reponse->closeCursor();


        ?>
    </div>
    

    </center>
    
</body>
  
