<?php include("entete.php");?>

<body>

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
            <!--MENU-->
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
            <!---->
            <div class="row mx-auto">
                <div class="col-12">
                        <img src="src\img\promotion.jpg" class="img-fluid" alt="Banniere promo" title="Banniere promo">
                </div>
            </div>


        <!--MAIN----------------------------------->

        <div class="row mx-auto">
            <div class="col-12 mt-2"> 
                <small id="stars" class="form-text text-muted">* Ces zones sont obligatoires</small>
                <h2>Vos coordonnées</h2>
                    <div>
                    <form action="destination.php" method="post">
                        <div class="form-group">
                            <label for="Nom">Nom*</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="Prenom">Prénom*</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="Prenom">Sexe*</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Féminin</label>
                                </div>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Masculin</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codepostal">Code postal*</label>
                            <input type="text" class="form-control" id="inputAddress" >
                        </div>
                        
                        <div class="form-group">
                            <label for="Adresse">Adresse</label>
                            <input type="email" class="form-control" id="inputAdresse" >
                        </div>
                        <div class="form-group">
                            <label for="Ville">Ville</label>
                            <input type="email" class="form-control" id="inputVille" >
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email*</label>
                            <input type="email" class="form-control" id="inputEmail" >
                        </div>

                        <h2>Votre demande</h2>
                        
                        <div class="form-group">
                            <label for="SujetFormControlSelect1">Sélectionnez votre sujet</label>
                            <select class="form-control" id="SujetFormControlSelect1">
                                <option>Mes commandes</option>
                                <option>Question sur un produit</option>
                                <option>Réclamation</option>
                                <option>Autres</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputQuestion">Votre question*</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">J'accepte le traitement informatique  de ce formulaire</label>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="submit"></label>
                            <div class="row mx-auto">
                            <button type="button" id="Envoyer" name="Envoyer" class="btn btn-dark mr-2" value="1">Envoyer</button>
                            <button type="button" id="Annuler" name="Annuler" class="btn btn-dark" value="1">Annuler</button>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div> 

        <!--FOOTER----------------------------------->
            <div class="row mx-auto">
                <div class="col-12 ">

                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded mb-3 mt-3" id="menu">
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
    </div>
    <?php include("footer.php");?>