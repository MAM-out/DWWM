<?php 
// Vérification de la validité des informations
if (isset($_POST['submit'])) {
    /**
     * Vérification du login
     */
     if (!empty($_POST['login'])) {
         if (preg_match($loginPattern, $_POST['login'])) {
             $login = $_POST['login'];
         } else {
             $formError = 'Renseignez un login valide !';
         }
     } else {
         $formError = 'Renseignez un login !';
     }
     /**
      * Vérification du mdp
      */
     if (!empty($_POST['password'])) {
         if (preg_match($passwordPattern, $_POST['password'])) {
             $login = $_POST['password'];
         } else {
             $formError = 'Renseignez un mot de passe valide !';
         }
     } else {
         $formError = 'Renseignez un mot de passe !';
     }
 }    

// Hachage du mot de passe
$pass_hache = password_hash($_POST['passwor'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO users(nom, prenom, email, logi, passwor, dateinscrip) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'logi' => $logi,
    'password' => $pass_hache,
    'email' => $email));
?>
