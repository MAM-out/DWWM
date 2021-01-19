<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=jarditou;port=3308;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br />';
}

$reponse->closeCursor();

?>