<?php
require '_header.php';
$json = array('error'=> true);
if(isset($_GET['id']))
    {
       $product = $DB->query('SELECT pro_id FROM produits WHERE pro_id=:id', array('id' => $_GET['id']));
        if(empty($product))
        {
            $json ['message'] = "Produit inexistant";
        }
   
        $panier->add($product[0]->pro_id);
        $json ['error'] = false;
        $json ['total'] = number_format ($panier->total(), 2,',',' ');
        $json ['count'] = $panier->count();
        $json ['message'] = "Produit ajouté";
    }
    else
    {
        $json ['message'] = "Aucun produit sélectionné";
    }
echo json_encode($json);
?>
