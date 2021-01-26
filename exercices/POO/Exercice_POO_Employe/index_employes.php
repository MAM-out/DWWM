<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require ('Employe.class.php');
// crea Employes

$employe1 = new Employe('Loper','Dave','13/03/2015', 'Conducteur travaux', '35k', 'Service Travaux', '200€');
//
$employe2 = new Employe('Geris','Mathieu','25/03/2020', 'Comptable', '30k', 'Service Support', '200€');
// 
$employe3 = new Employe('Henri','Marie','25/05/2012', 'Assitante BE', '25k', 'Service Travaux', '200€');
// 
$employe4 = new Employe('Namaris','Pauline','04/05/2020', 'Account Manager', '35k', 'Service Support', '200€');
// 
$employe5 = new Employe('Rose','Paul','13/03/2015', 'Responsable atelier','40k', 'Service Production', '200€');
// 


echo 'l\'employé ' . $employe5->nom() . ' ' . $employe5->prenom() . ', est dans l\'entreprise depuis : ' . $employe5->anciennete();



// afficher les infos
/*echo $employe1->infoEmploye();
echo '<br> ';
echo $employe2->infoEmploye();
echo '<br> ';
echo $employe3->infoEmploye();
echo '<br> ';
echo $employe4->infoEmploye();
echo '<br> ';
echo $employe5->infoEmploye();
echo '<br> ';*/




?>



</body>
</html>