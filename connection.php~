<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Message;charset=utf8', 'root', 'iut');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO acteurs (pseudo, nom, prenom, profession) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['nom'], $_POST['prenom'], $_POST['profession']));


header('Location: formulaire.php');