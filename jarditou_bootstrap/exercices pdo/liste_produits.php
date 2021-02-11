
<?php include("header.php");?>
<div>
                    <p>&nbsp;</p>
                </div>

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
                    <a class="nav-link text-light" href="formulaire_ajout_produits.php
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
    <!--Liste des produits -->
 
    <div class="row mx-auto">
        <div class="col-12"> 

        <p>&nbsp;</p>
        <table class="table table-striped table-sm">
                    <thead>
                        <tr class="table-dark text-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Référence</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Ajout</th>
                            <th scope="col">Bloqué</th> 
                        </tr>
                    </thead>   
                    <tbody>
                       <?php
                            require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
                            $db = connexionBase(); // Appel de la fonction de connexion
                            $requete = "SELECT pro_id, pro_ref, pro_libelle, pro_bloque FROM produits WHERE ISNULL(pro_bloque) ORDER BY pro_d_ajout DESC";

                            $result = $db->query($requete);

                            if (!$result) 
                            {
                                $tableauErreurs = $db->errorInfo();
                                echo $tableauErreur[2]; 
                                die("Erreur dans la requête");
                            }

                            if ($result->rowCount() == 0) 
                            {
                            // Pas d'enregistrement
                            die("La table est vide");
                            }

                            echo "<table>";

                            while ($row = $result->fetch(PDO::FETCH_OBJ))
                            { ?>
                                <tr class="table-grey">
                                <td class="border-right"><?= $row->pro_id ?></td>
                                <td class="border-right"><?= $row->pro_id ?></td>
                                <td class="border-right"><?= $row->pro_ref ?></td>
                                <td class="border-right"><?= $row->pro_libelle ?></td>
                                <td class="border-right"><?= $row->pro_bloque == 1 ? 'Oui' : 'Non' ?></td>
                                </tr>
                            <?php
                            }
                        ?>
                       
                            </tbody>
                </table>
                  
  
    </div><!--mx auto-->
</div><!--container-->

<?php include("footer.php");?>