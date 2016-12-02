<?php

setcookie('pseudo',$_POST['pseudo'], time() + 365*24*3600, null, null, false, true);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=aspicot;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO chat (pseudo, message, date_message) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message'], date('H:i:s')));


header('Location: formulaire.php');
?>