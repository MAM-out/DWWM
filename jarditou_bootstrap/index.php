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
                        <img src="src\img\promotion.jpg" class=" img-fluid" alt="Banniere promo" title="Banniere promo">
                </div>
            </div>


        <!--MAIN----------------------------------->

                <div class="row mx-auto">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 mb-2">
                        <div class="shadow-sm article p-2">
                       
                            <h2>L'entreprise</h2>
                            <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
                            <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                            <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie</p>



                            <h2>Qualité</h2>
                            <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.
                            Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>


                            <h2>Devis gratuit</h2>
                            <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.
                            In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare eu odio at blandit. Quisque gravida viverra tempor.</p>
                            <p>Cras id lorem commodo, sagittis libero ut, lobortis mi. Aenean posuere tortor felis, et rhoncus justo ultricies quis. Proin at suscipit nunc. Praesent vitae magna imperdiet, faucibus massa sit amet, consequat leo. Nullam lectus ipsum, sagittis at eleifend vel, pretium nec magna. Suspendisse eleifend eleifend tortor non tristique. Morbi efficitur dignissim ipsum, ac accumsan nunc ultrices ac. Donec sollicitudin ante sed tortor ultrices feugiat.
                            </p>
                            </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-2">
                        <div class="aside bg-warning h-100 p-2 ">
                            <h2 class="text-center "> [Colonne droite]</h2>
                        </div>
                    </div>
                </div> 

        <!--FOOTER----------------------------------->

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
    </div>
    <?php include("footer.php");?>