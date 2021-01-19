<!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <title>Atelier PHP N°4 - page de détail</title>
     <?php   
     require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
       $db = connexionBase(); // Appel de la fonction de connexion

      $pro_id = $_GET["pro_id"];
      //$requete = "SELECT * FROM produits WHERE pro_id=".$pro_id; 
      $requete = "SELECT * FROM produits WHERE pro_id = 7";
      $result = $db->query($requete);
      // Renvoi de l'enregistrement sous forme d'un objet
      $produit = $result->fetch(PDO::FETCH_OBJ);
      $result->closeCursor();   
   ?>

   </head>
   <body> 
    <div> Id du produit :<?php echo $produit->pro_id; ?> </div>
    <div> Catégorie du produit :<?php echo $produit->pro_cat_id; ?> </div>
    <div> Référence du produit : <?php echo $produit->pro_ref; ?> </div>
    <div> Libellé du produit : <?php echo $produit->pro_libelle; ?> </div>
    <div> Description du produit : <?php echo $produit->pro_description; ?> </div>
    <div> Prix du produit : <?php echo $produit->pro_prix; ?> </div>
    <div> Stock : <?php echo $produit->pro_stock; ?> </div>
    <div> Couleur du produit : <?php echo $produit->pro_couleur; ?> </div>
    <div> Photo du produit : <?php echo $produit->pro_photo; ?> </div>
    <div> Ajout du produit : <?php echo $produit->pro_d_ajout; ?> </div>
    <div> Modif du produit : <?php echo $produit->pro_d_modif; ?> </div>
    <div> Bloqué : <?php echo $produit->pro_bloque; ?> </div>

   </body>
 </html>