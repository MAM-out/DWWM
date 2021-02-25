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
            <div class="col-12 mt-2"> 

                <a class="text-uppercase text-success" href="contact.php">Contact</a><br>

                <a class="text-uppercase text-success" href="index.php">Accueil <span class="sr-only">(current)</span></a><br>

                <a class="text-uppercase text-success" href="tableau.php">Tableau</a><br>
 
                <a class="text-uppercase text-success" href="mentions-legales.php"> Mentions légales</a><br>

                <a class="text-uppercase text-success" href="horaires.php"> Horaires</a><br>

                <a class="text-uppercase text-success" href="sitemap.php">Plan du site</a>

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