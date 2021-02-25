<?php
if (isset($_GET['console']))
{
    //modif en requete préparée
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=jarditou','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console=?');
    $requete->execute(array($_GET['console']));

    while ($donnees = $requete->fetch())
    {
        echo '<p>' .$donnees["console"].'-'.$donnees["nom"]. '</p>';
    }
}

?>


<?php
/*
$bdd = new PDO('mysql:host=localhost;port=3308;dbname=jarditou','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT   console, nom  FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY nom');
while ($donnees = $reponse->fetch())
{
    echo '<p>' .$donnees["console"].'-'.$donnees["nom"]. '</p>';
 }
 */
?>

<?php /*
//test insertion table par la methode de l'URL donc GET, enrequete preparée
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=jarditou','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('INSERT INTO jeux_video(nom, posseseur) VALUES(?, ?)');
    $requete->execute(array($_GET['nom'], $_GET['possesseur']));


*/
?>