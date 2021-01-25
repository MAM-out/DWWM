<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$request = $bd>->('SELECT id, nom, prenom, date_embauche, fcposte, salaire, serv_ent FROM employes');

// toutes les entrees sont dans un tableau
While ( $donnees = $requet->fetch(PDO::FETCH_ASSOC))
{
    $perso = new Employe ($donnees);
    echo $employe->nom(), '<br>' , $employe->prenom(), '<br>' ;
}

?>





</body>
</html>