<?php include("header.php");?>


<div class="container">

<!--TITRE----------------------------------->
        <div class="row mx-auto">
            <div class="col-12">
                <p><h1>Liste des Produits</h1></p>
            </div>
        </div>


        <!--MAIN----------------------------------->
    <div class="row mx-auto">
        <div class="col-12 ">                  
            <table class="table table-striped table-sm">
                <thead>
                    <tr class="table-dark text-dark">
                    <th scope="col">Photo</th>
                    <th scope="col">ID</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Libellé</th>
                    <th scope="col">Prix</th>
                    <th scope="col">couleur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-warning">
                    <td class="border-right"><img src="src/img/7.jpg" class=" img-fluid" alt="Barbek Aramis noir avec grill" title="Barbek Aramis" width="150px"></td>
                    <td class="border-right">7</td>
                    <td class="border-right">Barbecues</td>
                    <td class="border-right">Athos</td>
                    <td class="border-right">110.00€</td>
                    <td >Brun</td>
                    </tr>
                    <tr>
                    <td class="border-right"><img src="src/img/8.jpg" class=" img-fluid" alt="Barbek Aramis gris" title="Barbek Aramis" width="150px"></td>
                    <td class="border-right">8</td>
                    <td class="border-right">Barbecues</td>
                    <td class="border-right">Aramis</td>
                    <td class="border-right">249.99€</td>
                    <td>Brun</td>
                    </tr>
                    <tr class="table-warning">
                    <td class="border-right"><img src="src/img/11.jpg" class=" img-fluid" alt="Barbek Clatronic métal naturel" title="Barbek Aramis" width="150px"></td>
                    <td class="border-right">11</td>
                    <td class="border-right">Barbecues</td>
                    <td class="border-right">Clatronic</td>
                    <td class="border-right">135.90€</td>
                    <td>Chrome</td>
                    </tr>
                    <tr >
                    <td class="border-right"><img src="src/img/12.jpg" class=" img-fluid" alt="Barbek Camping sur roulette" title="Barbek Aramis" width="150px"></td>
                    <td class="border-right">12</td>
                    <td class="border-right"d>Barbecues</td>
                    <td class="border-right">Camping</td>
                    <td class="border-right">88.00€</td>
                    <td>Noir</td>
                    </tr>
                    <tr class="table-warning">
                    <td class="border-right"><img src="src/img/13.jpg" class=" img-fluid" alt="Brouette Green" title="Barbek Aramis" width="150px"></td>
                    <td class="border-right">13</td>
                    <td class="border-right">Brouette</td>
                    <td class="border-right">Green</td>
                    <td class="border-right">49.00€</td>
                    <td>Verte</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div> 
</div>
    <?php include("footer.php");?>