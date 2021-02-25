<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="https://www.afpa.fr/afpa-theme/1.18.2/images/afpa/favicon.ico">
        <title>Exercices sessions et MDP</title>
    </head>
    



<body>
    <div class="container">
        <!--HEADER----------------------------------->
        <div class="row mx-auto m-5">
            <h1>Exercices sessions et MDP</h1>
        </div>
        
        <!-- PHP ---- >
        <?php
        // déclaration de session
        session_start();
        include 'header.php';
        include '#';
        ?>

    <div class="form-group">
                    <?php
            // Cas variable définie
            if (isset($_SESSION['login']) && (count($loginError) == 0)) {
                ?>
                <p>
                    Bienvenue <?= $_SESSION['login'] ?>. 
                </p>
                <form method="POST" action="#">
                    <input type="submit" id="back" name="back" value="Retour à la connexion" /> 
                </form>
                <?php
                // sinon on affiche le formulaire de connexion
            } else {
                var_dump($_POST);
                ?>
     </div>

        <!--MAIN----------------------------------->

        <div class="row mx-auto">
            <div class="col-12 mt-2"> 
                <h2>Session</h2>
                    <div>
        <!--FORMULAIRE----------------------------->

            <form action="#" method="post" enctype="multipart/form-data" >
            

                    <div class="form-group">
                        <label for="email">Email*<br> </label>
                        <input type="text" name="email" id="addmail" value="xxx.xxxx@xxxxx.xx" onFocus="if (this.value=='xxx.xxxx@xxxxx.xx')" class="form-control" required>
                    </div>
                    <div>
                        <label for="username">Identifiant &nbsp;:</label>
                        <input type="text" id="username" name="username">
                    </div>
                    
                    <div>
                        <label for="pass">Mot de passe ( mini 8 caract.) &nbsp;:</label>
                        <input type="password" id="pass" name="password"
                               minlength="8" required>*                    
                               <input type="submit" value="Se connecter" id="submit" name="submit" >

                    </div>
                    

            </form>
        </div>
       <!--FOOTER----------------------------------->

   

    <?php
    include 'footer.php';
        ?>  

<script src="public\js\verif-form.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>