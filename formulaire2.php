<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mainstyle.css" />
        <title>...</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    p{
    	text-align: center;
    }
    </style>
    <body>
    
    <form action="connection.php" method="post">
        <p>
        <label for="message">Pseudo</label> :  <input type="text" name="pseudo" id="pseudo" value= "<?php echo $_COOKIE['pseudo']; ?>"/>    <br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

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


$reponse = $bdd->query('SELECT pseudo, message, date_message FROM chat ORDER BY id_message DESC LIMIT 0, 10');



while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</br><strong>posté à :</strong> ' .htmlspecialchars($donnees['date_message']). '</p>';
}


$reponse->closeCursor();

?>
    </body>
</html>