<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICES PHP</title>
</head>
<body>
<?php

/*$oDate = new DateTime();
echo $oDate->format("l d M Y ");

// Exercice 1 / Affichez la date du jour au format mardi 2 juillet 2019.
echo "Exercice 1 <br>"; 
setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
echo strftime("%A %d %B %Y");
echo "<br><br>"; 

// Exercice 2 / Trouvez le numéro de semaine de la date suivante : 14/07/2019.
echo "Exercice 2 <br>"; 
$date_test = "2019-07-14";
$good_format=strtotime ($date_test);
echo date('W',$good_format);
echo "<br><br>"; 
*/
/*
// Exercice 3 / Combien reste-t-il de jours avant la fin de votre formation.
echo "Exercice 3 <br>"; 

$date1 = new DateTime("2021-01-04"); //date choisi du jour 
    $date2 = new DateTime("2021-07-16"); // date de fin de formation 
    $diff = $date2->diff($date1)->format("%a"); // mise en format des 2 dates
    $days = intval($diff); // intervalle
    echo $days; 

echo "<br><br>"; 
*/
/*
// Exercice 4 / Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime(). 

echo "Exercice 4 <br>"; 
$finForm = new DateTime('2021-07-16');
      $today = new DateTime();
      $temps = $finForm->diff($today);
      echo "Il reste ".$temps->days." jours.";
echo "<br><br>"; 
*/

// Exercice 5 / Quelle sera la prochaine année bissextile ?
/*echo "Exercice 5 <br>"; 
$date = new DateTime();
    for ($i = 0; $i < 4; $i++)
    {
    $date->modify('+1 years');
    if ($date->format('L') == 1)
    {
     ?>
    L'année <?= $date->format('Y') ?> sera la prochaine année bissextile.
    <?php
        }
    }

echo "<br><br>"; 
*/

// Exercice 6 / Montrez que la date du 17/17/2019 est erronée.
/*echo "Exercice 6 <br>"; 
$date = "17/17/2019";
  $testDate = DateTime::createFromFormat('d/m/Y', $date); 
  $errors = $testDate->getLastErrors();
    if ($errors['warning_count'] >= 1)
    {echo "la date est fausse";
    }
echo "<br><br>"; */


// Exercice 7 / Affichez l'heure courante sous cette forme : 11h25.
/*echo "Exercice 7 <br>"; 
date_default_timezone_set('Europe/Paris'); // => Paris
$heure = date('H\hi');
echo"Il est ".$heure;
echo "<br><br>"; */


// Exercice 8 / Ajoutez 1 mois à la date courante.
echo "Exercice 8 <br>"; 
$date = date("d-m-Y");
Print("Nous sommes le $date <br>");
$date2 = date('d-m-Y', strtotime(' + 1 month'));
Print("Dans un mois nous serons le $date2");



?>

</body>
</html>