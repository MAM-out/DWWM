<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="https://www.afpa.fr/afpa-theme/1.18.2/images/afpa/favicon.ico">
        <title>MINICHAT</title>
    </head> 
    <body>
        <div class="container">
    <!--HEADER----------------------------------->
            <div class="row mx-auto m-5">
                <h1>MINICHAT</h1>
            </div>
            <div class="row mx-auto">
                <div class="col-12 mt-2"> 
                    <h2>Session</h2>
                        <div>
    <!--FORMULAIRE----------------------------->
                <form action="minichat_post.php" method="post">
                        <div>
                            <label for="pseudo">pseudo &nbsp;:</label>
                            <input type="text" id="pseudo" name="pseudo" value="pseudo">
                        </div>
                        
                        <div>
                            <label for="messag">message &nbsp;:</label>
                            <input type="text" id="messag" name="messag" value="écrivez ici">       
                        </div>         
                        <div>
                        <input type="submit" value="Envoyer" id="Envoyer" name="Envoyer" >
                        </div>           
                </form>      
        </div>

        <div class="row mx-auto m-5">
<?php
    // on se connecte a bdd 'test'
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=test;port=3308;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    // recup 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo, messag FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    // messages affiches et bloques proteges
    while ($donnees = $reponse->fetch())
    {
        echo '<p>' . htmlspecialchars($donnees['pseudo']) . ' : ' . htmlspecialchars($donnees['messag']) . '</p>';
    }
    $reponse->closeCursor();
?>
 </div>





    <!--FOOTER----------------------------------->
    <script src="public\js\verif-form.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>