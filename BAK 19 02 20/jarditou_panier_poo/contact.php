<?php include("cc/header.php");?>

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

        <?php include("cc/footer.php");?>