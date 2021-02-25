<?php
require '_header.php';
if(isset($_GET['id']))
    {
       $product = $DB->query('SELECT pro_id FROM produits WHERE pro_id=:id', array('id' => $_GET['id']));
        if(empty($product))
        {
            die("<h1> Produit inexistant </h1>");
        }
        $panier->add($product[0]->pro_id);
        die("<h1> Produit ajout, <a href='/produits.php'>retour catalogue produits</a> </h1>");
    }
    else
    {
        die("<h1> Aucun produit sélectionné </h1>");
    }

?>