<?php 
session_start();
    if ( ! isset($_SESSION["login"]) ) 
    {
        header("Location:formulaire.php");
        exit;
    }
// Reste du code (PHP/HTML)
    echo("Bonjour ".$_SESSION["login"]."<br>");  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="https://www.afpa.fr/afpa-theme/1.18.2/images/afpa/favicon.ico">
        <title>Exercices sessions et MDP</title>
        </head>
   