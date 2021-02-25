<?php

if(isset($_POST['nbr1']) == NULL)
{
    exit("Nombre 1 non rentré");
}
if(isset($_POST['signe']) == NULL)
{
    exit("Signe non complété");
}
if(isset($_POST['nbr2']) == NULL)
{
    exit("Nombre 2 non rentré");
}

if($_POST['signe'] != "+" && $_POST['signe'] != "-" && $_POST['signe'] != "*" && $_POST['signe'] != "/" )
{
    exit("Le signe est incorrect");
}

// On déclare une variable

$resultat = $_POST['nbr1'] + $_POST['nbr2'];

header("Location: index.php?resultat=".$resultat);
?>

