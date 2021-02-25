<?php

// on se connecte a bdd 'test'
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;port=3308;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
// fin de Cmde de connection c'est tjs la même façon d'entrer en lecture ou en envoi

// requête qui insère le message dans la bdd test dans la table minichat
    $requete = $bdd->prepare('INSERT INTO minichat(pseudo, messag) VALUES(?, ?)');
    $requete->execute(array($_POST['pseudo'], $_POST['messag']));

// redirection sur minichat.php
header('Location:minichat.php');
?>