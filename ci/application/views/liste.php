
<div class="container">
    <div class="row mx-auto">
        <div class="col-12 ">  
            <h1>Exercices</h1>
            <p> Réalisez l'intégralité du formulaire d'ajout d'un produit Jarditou. Ne faites pas l'upload de l'image pour le moment.
            </p>
            <p>Réalisez l'intégralité du formulaire de modification d'un produit Jarditou. Ne faites pas l'upload de l'image pour le moment.
            </p>
        </div>
    </div>
    <!--Liste des produits -->

    <div class="row mx-auto">
        <div class="col-12"> 

        <div class="float-left ">
        <a href="<?= site_url('Produits/ajouter') ?>" class="btn btn-dark mx-auto" title="Lien vers ajout d'un produit" target="_blank">Ajouter un produit</a>
        <a href="<?= site_url('Produits/modifier') ?>" class="btn btn-dark mx-auto" title="Lien vers la modif d'un produit" target="_blank">Modifier un produit</a>
        </div>
        <p>&nbsp;</p>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr class="table-dark text-dark">
                        <th scope="col">Photo</th>
                        <th scope="col">ID</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Référence</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Description</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Ajout</th>
                        <th scope="col">Modif</th>
                        <th scope="col">Bloqué</th> 
                        <th scope="col">Fiche</th>                    
                    
                        </tr>
                    </thead>   
                <tbody>
                    <?php 
                foreach ($liste_produits as $row) 
                    { ?>
                    <tr class="table-warning">
                    <td class="border-right">
                    <img src="<?php echo base_url("assets/images/7.jpg"); ?>" alt="Barbek Aramis noir avec grill" title="Barbek Aramis" width="150px" class="img-fluid"></td>
                    </td>
                    <td><?= $row->pro_id ?></td>
                        <td class="border-right"><?= $row->pro_cat_id ?></td>
                        <td class="border-right"><?= $row->pro_ref ?></td>
                        <td class="border-right"><?= $row->pro_libelle ?></td>
                        <td class="border-right"><?= $row->pro_couleur ?></td>
                        <td class="border-right"><small><?= $row->pro_description ?></small></td>
                        <td class="border-right"><?= $row->pro_prix ?></td>
                        <td class="border-right"><?= $row->pro_stock ?></td>
                        <td class="border-right"><?= $row->pro_d_ajout ?></td>
                        <td class="border-right"><?= $row->pro_d_modif ?></td>
                        <td class="border-right"><?= $row->pro_bloque == 1 ? 'Oui' : 'Non' ?></td>
                        <td class="border-right"><a href="<?= site_url('Produits/update') . '/' . $row->pro_id ?>" title="Lien vers la fiche produit" class="waves-effect waves-light btn">Fiche Produit</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
  
    </div><!--mx auto-->
</div><!--container-->

   