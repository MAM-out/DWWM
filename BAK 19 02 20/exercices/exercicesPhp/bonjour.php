<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Test 1er exo PHP</title>
</head>
<body>
    

<!-- <h1>

<?php echo "Bonjour le monde"; ?></h1>     

<br>
<?php /*
echo"<h1>Bonjour le monde</h1>";   

//------La fonction error_log()

$myVar = "KO";
if ($myVar == "OK") 
{   
   echo"C'est bon<br>";
} 
else 
{
    echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
    error_log($message); 
} 
*/?> 

<br>







<h1> Introduction à PHP </h1>
<?php/*
//---------------------Challenge---------------
//Créer une variable qui contient des noms de jeux vidéos. 
  $jeuxVideos = array('supermario','tetris','crash bandicoot','world of warcraft'); // Type tableau

//Écrire une fonction qui affiche une ligne de tableau contenant un seul nom de jeu vidéo passé préalablement en paramètre de la fonction.
echo $jeuxVideos[2] ;
echo"<br><br>";  

// Compléter ensuite votre code avec une boucle qui affichera à chaque tour votre fonction pour finalement obtenir tous les noms des jeux. (1 nom de jeu = 1 ligne de tableau)

// Affichage des jeux
foreach($jeuxVideos as $element) {
  echo $element. '<br>'; // affiche jeux 1, 2.....

}

// Utilisation de Bootstrap pour la forme  et un plug-in jQuery (datatables.js) pour un tri dynamique dans le tableau.

// Puis on fait une boucle pour tout afficher :


//------------FC print et sprintf

echo"<br><br>";  

echo"<br><br>";  

echo"-------------------<br>";  

$euro = 6.55957;
printf("%.2f FF<br />",$euro);

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;

echo $money; // affiche 123.1;
echo"<br><br>";  

echo "affichage sans printf : ".$money."<br>";
echo"<br><br>";  

$monformat = sprintf("%01.2f", $money);

echo $monformat; // affiche 123.10
echo"<br><br>";  

echo "affichage avec printf : ".$monformat."<br>";
echo"<br><br>";  

$year = "2002";
$month = "4";
$day = "5";

$date = sprintf("%04d-%02d-%02d", $year, $month, $day);

echo $date."<br>"; // affichera "2002-04-05"
echo "affichage avec sprintf : ".$date."<br>";*/

// ------------ exercice 1 afficher les nb impaires jusqu'à 150.
/*
$nb=1;
$nb%2 == 1 ;
$compteur = 0 ;

 echo $nb. "&nbsp";
 while ($compteur <= 73){
 $compteur++;
 $nb = $nb + 2;
 echo ("$nb \n");
 }
*/

//-------- exercice 2/ ecrire 500 x save !
/*
$backup = "Je dois faire des sauvegardes régulières de mes fichiers.";
$compteur = 1;


 while ($compteur <= 500)
 {
  $compteur++;
  echo ("$backup \n");
 }




// exercice 3 table 12

*/?>


<table class="highlight centered responsive-table">
    <thead>
        <tr>
            <th></th>
            <?php
            $x = 0;
            while ($x <= 12) {
            ?>
                <th><?= $x ?></th>
            <?php
                $x++;
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $y = 0;
        while ($y <= 12) {
        ?>
            <tr>
                <td>
                    <?= $y ?>
                </td>
                <?php
                $x = 0;
                while ($x <= 12) {
                ?>
                    <td>
                        <?= $x * $y ?>
                        <?php $x++; ?>
                    </td>
                <?php
                } 
                ?>
            </tr>
        <?php
        $y++;
        }
        ?>
    </tbody>
</table>
-->

<br />




<?php
if(!isset($_GET['resultat']))
{
$_GET['resultat'] = 0;
}
?>

<strong>Résultat:</strong> <?php echo htmlspecialchars($_GET['resultat']); ?>
<br /><br />


<form method="post" action="form.php">
Sélectionnez un nombre: <input type="text" name="nbr1" /><br />
Sélectionnez le signe (+, -, /, *) : <input type="text" name="signe" /><br />
Sélectionnez le deuxième nombre: <input type="text" name="nbr2" /><br />
<br />
<input type="submit" valu="Faire le calcul" />
</form>







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

