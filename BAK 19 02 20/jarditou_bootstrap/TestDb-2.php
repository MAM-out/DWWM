<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 2 bien débuter</title>

<?php
try {
    $db = new PDO('mysql:host=localhost;port=3308;dbname=hotel', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
    die();
}

$requete = $db->prepare("SELECT * FROM station WHERE sta_altitude>:altitude");
$requete->bindValue(":altitude", $altitude);
$requete->execute();

while ($ligne = $requete->fetch()) 
{
    echo $ligne["sta_nom"];
}
?>

</head>
<body>
    
</body>
</html>