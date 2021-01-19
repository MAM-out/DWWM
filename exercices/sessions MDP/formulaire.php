
    <?php
    include("header.php");
    include("valid-form.php");  
    ?>

    

<body>
    <div class="container">
        <!--MAIN----------------------------------->

        <div class="row mx-auto">
            <div class="col-12 mt-2"> 
                <small id="stars" class="form-text text-muted">Les champs sont obligatoires</small>
                <h2>Session</h2>
                    <div>
            <!--FORMULAIRE----------------------------->
            <form action="authentification.php" method="post">

                        <label for="login">Login <br></label>
                        <br>
                        <input type="text" id="login" name="login">
                    </div>
                    
                    <div>
                        <label for="pass">Mot de passe (8 mini)</label>
                        <br>
                        <input type="password" id="pass" name="password" minlength="8" required>
                        <br><br>
                        <input type="submit" value="Se connecter" name="submit">

                    </div>
                    
            </form>
        </div>

       <!--FOOTER----------------------------------->



<script src="public\js\verif-form.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>