<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichiers PHP</title>
</head>
<body>
    
<?php

/*
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myVar = "Bonjour le monde";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp); 

// Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 
*/
/*
// Lit une page web dans un tableau.
$lines = file('http://www.trafalgraph.fr/');

// Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

// Un autre exemple, pour obtenir une page web dans une chaîne. Voir aussi la fonction file_get_contents().
$html = implode('', file('http://www.trafalgraph.fr/'));

// Utilisation de drapeau, depuis PHP 5
$trimmed = file('essai.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
*/

//écrire un programme qui lit le fichier 'ListeLiens.txt' pour construire une page web contenant une liste de liens hypertextes.
$fichier = file("ListeLiens.txt");
$total = count($fichier);
  for($i = 0; $i < $total; $i++) {
    echo nl2br($fichier[$i]);
}



?>






</body>
</html>