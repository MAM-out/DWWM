<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="https://www.afpa.fr/afpa-theme/1.18.2/images/afpa/favicon.ico">
        <title>Jarditou foufou</title>
    </head>
    



<body>
    <div class="container">

        <!--HEADER----------------------------------->
            <div class="row  mx-auto">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8  d-none d-sm-block"> 
                    <div class="pb-2"><img src="public\img\jarditou_logo.jpg" alt="Logo Jarditou" title="Logo Jarditou" width="300"> </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4  d-none d-sm-block align-self-center">
                    <div class="p-3"><h1 class="text-right">Tout le jardin</h1><br>
                    <a href="form-connexion.php" class="btn btn-secondary btn-lg active" role="button" aria-disabled="true">Connexion</a>
                </div>
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
                            <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="tableau.html">Tableau</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
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
                        <img src="public\img\promotion.jpg" class="img-fluid" alt="Banniere promo" title="Banniere promo">
                </div>
            </div>


        <!--MAIN----------------------------------->

        <div class="row mx-auto">
            <div class="col-12 mt-2"> 
                <small id="stars" class="form-text text-muted">Champs obligatoires</small>
                <h2>Inscription</h2>
        <!--FORMULAIRE de connexion----------------------------->

             <form action="#" method="post">

                    <div class="form-group">
                    <label for="nom">nom* <br></label>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" class="form-control" required>
                    <br></div>
            
                    <div class="form-group"><label for="prénom">prénom*<br> </label>
                    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" class="form-control" required>
                    <br></div>
                
                    <div class="form-group"><label for="email">Email*<br> </label>
                    <input type="text" name="email" id="addmail" value="xxx.xxxx@xxxxx.xx" onFocus="if (this.value=='xxx.xxxx@xxxxx.xx')" class="form-control" required>
                    <br></div>

                    <div class="form-group">
                    <label for="login">login* <br></label>
                    <input type="text" name="login" id="logi" placeholder="Logi" class="form-control" required>
                    <br></div>

                    <div class="form-group">
                    <label for="password">mot de passe* <br></label>
                    <input type="text" name="passwor" id="passwor" placeholder="mot de passe" class="form-control" required>
                    <br></div>
    

                    <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-lg">Envoyer</button>
                    </div>

            </form>
        </div>
        </div>
       <!--FOOTER----------------------------------->

            <div class="row ">
                <div class="col-12 ">

                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark rounded mb-3 mt-3" id="menu">
                        <div class="d-none d-sm-block">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Mentions légales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Horaires</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Plan du site</a>
                                </li>
                            </ul>
                        </div>    
                    </nav>
                </div>
            </div>

<script src="public\js\verif-form.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>