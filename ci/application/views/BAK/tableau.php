<?php include("header.php");?>

    <div class="container">

        <!--HEADER----------------------------------->
            <div class="row  mx-auto">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8  d-none d-sm-block"> 
                    <div class="pb-2"><img src="src\img\jarditou_logo.jpg" alt="Logo Jarditou" title="Logo Jarditou" width="300"> </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4  d-none d-sm-block align-self-center">
                    <div class="p-3"><h1 class="text-right">Tout le jardin</h1></div>
                </div> 
            </div>
            <div class="row mx-auto">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Jarditou.com</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="tableau.php">Tableau</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Votre promotion">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                        </div>
                    </nav>
                </div>
            </div>    

            <div class="row mx-auto">
                <div class="col-12">
                        <img src="src\img\promotion.jpg" class="img-fluid" alt="Banniere promo" title="Banniere promo">
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

        <!--FOOTER---------------------------------

            <div class="row mx-auto">
                <div class="col-12 ">

                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded mb-3" id="menu">
                        <div class="d-none d-sm-block">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="mentions-legales.php"> Mentions légales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="horaires.php"> Horaires</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sitemap.php">Plan du site</a>
                                </li>
                            </ul>
                        </div>    
                    </nav>
                </div>
            </div>
    </div>-->
    <?php include("footer.php");?>