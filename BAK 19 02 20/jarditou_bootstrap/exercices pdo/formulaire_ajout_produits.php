
   <?php   
    include "header.php";
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    require "produits_ajout_script.php"; // Inclusion de notre bibliothèque de fonctions
   ?>

                <div>
                    <p>&nbsp;</p>
                </div>
<div class="container">
        <div class="row mx-auto">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                    <div class="navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link text-light" href="liste_produits.php">Liste produit <span class="sr-only">(current)</span></a>
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
            </div>
        </div>

      <div class="row mx-auto">
      <div class="col-12">
      <div>
       <p>&nbsp;</p>
        </div>
      <form method="post"  action="produits_ajout_script.php" name="ajouter">
                <div class="form-group"> Id<input type="number" class="form-control" id="ID" name="ID" type="number" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Catégorie<input type="number" class="form-control" id="categorie" type="number" name="categorie" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Référence<input type="text" class="form-control" id="reference" type="text" name="reference" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Libellé<input type="text" class="form-control" id="libelle" name="libelle" type="text" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Description<input type="pastextsword" class="form-control" id="descript" type="text" name="descript" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Prix<input type="number" class="form-control" id="prix" type="number"  name="prix" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Stock<input type="number" class="form-control" id="stock" type="number"  name="stock" placeholder="Entrez la valeur">
                </div>
                <div class="form-group">  Couleur<input type="text" class="form-control" id="couleur" name="couleur" placeholder="Entrez la valeur">
                </div>
                <div class="mb-3 form-group"> Photo<input type="#" class="form-control" id="photo" type="text" name="photo" placeholder="Entrez la valeur">
                </div>
            
                <div class="form-group">
                Produit bloqué
                <select name="bloque" id="bloque">
                <option value="1" selected>non</option>
                <option value="2">oui</option>
                </select>
          
                <div class="form-group"> 
                <input class="btn btn-dark" type="submit" class="form-control" id="ajouter" name="ajouter" value="Ajouter"/>
                </div>
             
            </form>
        </div>
    </div>  
</div>      
  
    </div>
  </body>
 </html>