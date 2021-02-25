
   <?php   
    include "header.php";
    $pro_id = $_GET["pro_id"];
     require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
     
      $db = connexionBase(); // Appel de la fonction de connexion
     
      $requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;
      $result = $db->query($requete);
      $produit = $result->fetch(PDO::FETCH_OBJ);
      $result->closeCursor();   
   ?>
    <div class="container">
      <div class="row mx-auto">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link text-light" href="liste_produits.php">liste produit <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href=" formulaire_ajout_produits.php
    ">Ajout produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Contact</a>
                </li>
            </ul>
            </div>
          </nav>
 
                <div> Id<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_id; ?>">
                </div>
                <div> Catégorie<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_cat_id; ?>">
                </div>
                <div> Référence<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_ref; ?> ">
                </div>
                <div> Libellé<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_libelle; ?>">
                </div>
                <div> Description<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_description; ?>">
                </div>
                <div> Prix<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_prix; ?>">
                </div>
                <div> Stock<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_stock; ?>">
                </div>
                <div> Couleur<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_couleur; ?>">
                </div>
                <div class="mb-3"> Photo<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_photo; ?>">
                </div>
                <div class="float-left mr-3 mb-3"> Produit bloqué
                </div>
                  <div class="float-left mx-3">
                    <input class="form-check-input " type="radio" name="#" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="checkradio">
                    oui
                    </label>
                  </div>
                  <div class="float-left mx-3 mb-3">
                    <input class="form-check-input" type="radio" name="#" id="exampleRadios1" value="option2" >
                    <label class="form-check-label" for="checkradio">
                    non
                    </label>
                  </div>

                  <div class="float-bottom"> 
                    <p>Ajout<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_d_ajout; ?>"></p>
                </div>
                <div class="float-bottom"> Modif<input type="text" class="form-control" id="#" placeholder="<?php echo $produit->pro_d_modif; ?>">
                </div>
             
               
        </div>
      </div>    
    </div>
  </body>
 </html>