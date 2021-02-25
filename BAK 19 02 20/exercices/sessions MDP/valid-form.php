<?php

                       
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
?>