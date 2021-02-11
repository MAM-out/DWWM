<?php
function connexionBase()
{
   // Paramètre de connexion serveur
   $host = "localhost";
   $login= "root";  // Votre loggin d'accès au serveur de BDD 
   $password="";    // Le Password pour vous identifier auprès du serveur
   $base = "jarditou";  // La bdd avec laquelle vous voulez travailler 
   
  
   try 
   {
    $db = new PDO('mysql:host=' .$host. ';charset=utf8;port=3308;dbname=' .$base, $login, $password);
    return $db; // n'oublies pas de renvoyer la BDD !!!
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    mysql_select_db ('DataBase', $db);
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode() . '<br>';
        die('Fin du script');
    } 
    //$db->query("SET NAME UTF8");

}
?>