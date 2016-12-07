<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mainstyle.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <title>Inscription</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    <?php include "header.php"; ?>
    
    <form action="connection.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="nom">Nom</label> :  <input type="text" name="nom" id="nom" /><br />
        <label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" /><br />
        <label for="profession">Profession</label> :  <input type="text" name="profession" id="profession" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Message;charset=utf8', 'root', 'iut');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT pseudo, nom, prenom, profession FROM acteurs ORDER BY id_acteur ASC');



while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong></p>';
	echo '<p><strong>' . htmlspecialchars($donnees['nom']) . '</strong></p>';
	echo '<p><strong>' . htmlspecialchars($donnees['prenom']) . '</strong></p>';
	echo '<p><strong>' . htmlspecialchars($donnees['profession']) . '</strong></p>';
}


$reponse->closeCursor();

?>
    </body>
</html>