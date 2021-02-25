<?php
/*Récupération et vérification des informations transmises par le formulaire
Enregistrement des données dans la base
Redirection vers la liste. Cette redirection s'effectue à l'aide de la fonction header("Location:liste.php"); pour l'instant non je verifie si ca part*/

// Paramètre de connexion serveur
/*$host = "localhost";
$login= "root";  // Votre loggin d'accès au serveur de BDD 
$password="";    // Le Password pour vous identifier auprès du serveur
$base = "jarditou";  // La bdd avec laquelle vous voulez travailler */

   // insertion des données reçues
   if(isset($_POST['ajouter'])) // si btn cliqué
   {
   
    // tentative
    try {
        $host = "localhost";
        $login= "root";  // Votre loggin d'accès au serveur de BDD 
        $password="";    // Le Password pour vous identifier auprès du serveur
        $base = "jarditou";  // La bdd avec laquelle vous voulez travailler 

        // se connecter à mysql
        $db = new PDO('mysql:host=localhost;port=3308;dbname=jarditou','root','');
        //$db = new PDO('mysql:host=' .$host. ';charset=utf8;port=3308;dbname=' .$base, $login, $password);
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        } catch (PDOException $exc) 
            {
            echo $exc->getMessage();
            exit();
            }
            // récupérer les valeurs 
  
            $id = $_POST["ID"];
            $categorie = $_POST["categorie"];
            $reference = $_POST["reference"];
            $libelle = $_POST["libelle"];
            $descript = $_POST["descript"];
            $prix = $_POST["prix"];
            $stock = $_POST["stock"];
            $couleur = $_POST["couleur"];
            $photo = $_POST["photo"];
            $ajout = date("Y-m-d");
            $modif = NULL;
            $bloque = $_POST["bloque"];


            // Requête mysql pour insérer des données
            $insertion = $db->prepare("INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_d_ajout, pro_d_modif,pro_bloque) VALUES (:id, :categorie, :reference, :libelle, :descript, :prix, :stock, :couleur, :photo, :ajout, :modif, :bloque) ");
                $insertion->bindParam(':id',$id);
                $insertion->bindParam(':categorie',$categorie);
                $insertion->bindParam(':reference',$reference);
                $insertion->bindParam(':libelle',$libelle);
                $insertion->bindParam(':descript',$descript);
                $insertion->bindParam(':prix',$prix);
                $insertion->bindParam(':stock',$stock);
                $insertion->bindParam(':couleur',$couleur);
                $insertion->bindParam(':photo',$photo);
                $insertion->bindParam(':ajout',$ajout);
                $insertion->bindParam(':modif',$modif);
                $insertion->bindParam(':bloque',$bloque);
                $insertion->execute();

            // vérifier si la requête d'insertion a réussi
            if($insertion)
            {
            echo 'Données insérées';
            }else
            {
            echo "Échec de l opération d insertion";
            }
    }

/*
            // Requête mysql pour insérer des données
            // $sql = "INSERT INTO `users`(`firstname`, `lastname`) VALUES (:firstname,:lastname)";
            $insertion = $db->prepare("INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_bloque) VALUES (:id, :categorie, :reference, :libelle, :descript, :prix, :stock, :couleur, :photo, :bloque) ");
            //$res = $pdo->prepare($sql);
            //$exec = $res->execute(array(":firstname"=>$firstname,":lastname"=>$lastname));

            $insertion->bindParam(':id',$id);
            $insertion->bindParam(':categorie',$categorie);
            $insertion->bindParam(':reference',$reference);
            $insertion->bindParam(':libelle',$libelle);
            $insertion->bindParam(':descript',$descript);
            $insertion->bindParam(':prix',$prix);
            $insertion->bindParam(':stock',$stock);
            $insertion->bindParam(':couleur',$couleur);
            $insertion->bindParam(':photo',$photo);
            $insertion->bindParam(':bloque',$bloque);
            $insertion->execute();

            // vérifier si la requête d'insertion a réussi version simplifiee
            if($insertion){
            echo 'Données insérées';
            }else{
            echo "Échec de l'opération d'insertion";
            }
        }
*/
//fin import 080221


/*
    // insertion des données reçues
    if(isset($_POST['ajouter'])) // si btn cliqué
    {
    //recup des donnes entrees par l'internaute
    $id = $_POST["ID"];
    $categorie = $_POST["categorie"];
    $reference = $_POST["reference"];
    $libelle = $_POST["libelle"];
    $descript = $_POST["descript"];
    $prix = $_POST["prix"];
    $stock = $_POST["stock"];
    $couleur = $_POST["couleur"];
    $photo = $_POST["photo"];
    $bloque = $_POST["bloque"];
    
     // verif si le schamps sont pas nuls

       $id = isset($_POST["ID"]) ? $_POST["ID"] : NULL;
        $categorie = isset($_POST["categorie"]) ? $_POST["categorie"] : NULL;
        $reference = isset($_POST["reference"]) ? $_POST["reference"] : NULL;
        $libelle = isset($_POST["libelle"]) ? $_POST["libelle"] : NULL;
        $descript = isset($_POST["descript"]) ? $_POST["descript"] : NULL;
        $prix = isset($_POST["prix"]) ? $_POST["prix"] : NULL;
        $stock = isset($_POST["stock"]) ? $_POST["stock"] : NULL;
        $couleur = isset($_POST["couleur"]) ? $_POST["couleur"] : NULL;
        $photo = isset($_POST["photo"]) ? $_POST["photo"] : NULL;
        $bloque = isset($_POST["bloque"]) ? $_POST["bloque"] : NULL;
*/

/*
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


//fin tentative

        $insertion = $db->prepare("INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_bloque) VALUES (:id, :categorie, :reference, :libelle, :descript, :prix, :stock, :couleur, :photo, :bloque) ");

        $insertion->bindParam(':id',$id);
        $insertion->bindParam(':categorie',$categorie);
        $insertion->bindParam(':reference',$reference);
        $insertion->bindParam(':libelle',$libelle);
        $insertion->bindParam(':descript',$descript);
        $insertion->bindParam(':prix',$prix);
        $insertion->bindParam(':stock',$stock);
        $insertion->bindParam(':couleur',$couleur);
        $insertion->bindParam(':photo',$photo);
        $insertion->bindParam(':bloque',$bloque);
        $insertion->execute();

        if($insertion == true) 

        {
            $msgSuccess = "le produit a bien été ajouté";
        }
        else
        {
            $msgError = "echec de l'enregistrement";
        }

    }
*/

 //On renvoie l'utilisateur vers la liste
//header("Location:liste_produits.php");

  /*
    if(isset($_POST['submit'])) // si btn cliqué
    {
        if(isset(['ID'], $_POST['categorie'], $_POST['reference'], $_POST['libelle'], $_POST['description'], $_POST['prix'], $_POST['stock'], $_POST['couleur'], $_POST['photo'], $_POST['bloque']))
        {
            if($_POST['ID'] != "" && $_POST['categorie'] != "" && $_POST['reference'] != "" && $_POST['libelle'] != "" && $_POST['description'] != "" && $_POST['prix'] != "" && $_POST['stock'] != "" && $_POST['couleur'] != "" && $_POST['photo'] != "" && $_POST['bloque'] != "")
            {
                $insertion = "INSERT INTO produits (pro_id, pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur, pro_photo, pro_bloque) VALUES ('$id', '$categorie', '$reference', '$libelle', '$descript', '$prix', '$stock', '$couleur', '$photo', '$bloque') ";

                $execute = $db->query($insertion); // insertion  base

                if($execute == true)
                {
                    $msgSuccess = "le produit a bien été ajouté";
                }
                else
                {
                    $msgError = "echec de l'enregistrement";
                }
            }
        }
    }
    */
?>
