<?php
$tableau = array(); // instruction optionnelle
$tableau[0] = "Pomme"; 
$tableau[1] = "Poire"; 
$tableau[2] = "Banane"; 







$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");


// tableau xassociatifs 
$facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
$facture_sixmois=0; 

foreach ($facture as $mois => $valeur) 
{ 
   echo "Facture du mois de $mois : $valeur Euros<br />"; 
   $facture_sixmois +=$valeur; 
} 

echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 
?> 