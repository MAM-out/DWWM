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

// crea objets Employes

$employe1 = new Employe('Loper','Dave','13/03/2015', 'Conducteur travaux', '35k', 'Service Travaux');
//
$employe2 = new Employe('Geris','Mathieu','25/03/2020', 'Comptable', '30k', 'Service Support');
// 
$employe3 = new Employe('Henri','Marie','25/05/2012', 'Assitante BE', '25k', 'Service Travaux');
// 
$employe4 = new Employe('Namaris','Pauline','04/05/2020', 'Account Manager', '35k', 'Service Support');
// 
$employe5 = new Employe('Rose','Paul','13/03/2015', 'Responsable atelier','40k', 'Service Production');
// 

// nombre d'employes enregistre
//count 

// afficher les infos avec un descrp sur service
echo $employe1;
echo '<br> ';
echo $employe2;
echo '<br> ';
echo $employe3;
echo '<br> ';
echo $employe4;
echo '<br> ';
echo $employe5;

/*$this->_nom = $nom; 
$this->_prenom = $prenom; 
$this->_date_embauche = $date_embauche; 
$this->_fc_poste = $fc_poste; 
$this->_salaire_brut = $salaire_brut; 
$this->_service_employe = $service_employe; */


?>



</body>
</html>