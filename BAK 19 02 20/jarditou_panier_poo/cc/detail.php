<?php include("header.php");?>





     <?php   
    $pro_id = $_GET["pro_id"];

     require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
     
      $db = connexionBase(); // Appel de la fonction de connexion

    
      $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
      $result = $db->query($requete);
      $produit = $result->fetch(PDO::FETCH_OBJ);
      $result->closeCursor();   
   ?>

<!-- -->
    <div> Id <?php echo $produit->pro_id; ?> </div>
    <div> Catégorie <?php echo $produit->pro_cat_id; ?> </div>
    <div> Référence  <?php echo $produit->pro_ref; ?> </div>
    <div> Libellé  <?php echo $produit->pro_libelle; ?> </div>
    <div> Description  <?php echo $produit->pro_description; ?> </div>
    <div> Prix  <?php echo $produit->pro_prix; ?> </div>
    <div> Stock : <?php echo $produit->pro_stock; ?> </div>
    <div> Couleur  <?php echo $produit->pro_couleur; ?> </div>
    <div> Photo  <?php echo $produit->pro_photo; ?> </div>
    <div> Ajout  <?php echo $produit->pro_d_ajout; ?> </div>
    <div> Modif  <?php echo $produit->pro_d_modif; ?> </div>
    <div> Bloqué : <?php echo $produit->pro_bloque; ?> </div>




    <?php include("footer.php");?>