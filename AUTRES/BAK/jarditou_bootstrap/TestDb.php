<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>testDb.php</title>
<?php
 //$pro_id = $_GET["pro_id"];
 //Pour récupérer la variable passée dans l'URL, il faut utiliser le tableau associatif $_GET.

try 
{
    $db = new PDO('mysql:host=localhost;port=3308;dbname=jarditou;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
} 

$requete = "SELECT * FROM produits WHERE pro_id = 7";
$result = $db->query($requete); 
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();
/*$requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
$result = $db->query($requete); 
$produit = $result->fetch(PDO::FETCH_OBJ);
$result->closeCursor();*/

?>
</head>
<body> 
 <?php echo $produit->pro_id; ?>
 <br>
 <?php echo $produit->pro_cat_id; ?>
 <br>
 <?php echo $produit->pro_ref; ?>
 <br>
 <?php echo $produit->pro_libelle; ?>
 <br>
 <?php echo $produit->pro_description; ?>
 <br>
 <?php echo $produit->pro_prix; ?>
 <br> 
 <?php echo $produit->pro_stock; ?>
 <br>
 <?php echo $produit->pro_couleur; ?>
 <br>
 <?php echo $produit->pro_photo; ?>
 <br> 
 <?php echo $produit->pro_d_ajout; ?>
 <br> 
 <?php echo $produit->pro_d_modif; ?>
 <br> 
 <?php echo $produit->pro_bloque; ?>
 </body>
 </html>



