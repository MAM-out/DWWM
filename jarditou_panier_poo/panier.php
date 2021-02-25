<?php
$titre = "Votre panier";
$description = "Vous pouvez désormais procéder à la commande ou continuer vos achats sur votre site Jarditou";
?><?php include("cc/header.php");?>

    <div id="#" class="clearfix">
        <div class="checkout">
            <div class="title">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">PANIER</h1>
                </div>
            </div>
 <!--form-->
<form method="post" action="panier.php">
                <div class="table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Sous-Total</th>
                            <th scope="col">SUP</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $ids = array_keys($_SESSION['panier']); 
                        if(empty($ids))
                        {
                            $products = array();
                        }
                        else{
                            $products = $DB->query('SELECT * FROM produits WHERE pro_id IN(' . implode(',', $ids) .')');
                        }
                        
                        
                        foreach ($products as $product) :?>

                            <tr>
                            <th scope="row"><?php echo $product->pro_id;?></th>
                            <td><a href="#"class="img">  <img class="img-fluid" src="/assets/img/<?php echo $product->pro_id; ?>.jpg" style="width:20%; height:auto" alt="<?php echo $product->pro_libelle; ?>"></a></td>
                            <td><?php echo $product->pro_libelle;?></td>
                            <td><?php echo number_format ($product->pro_prix, 2,',',' '); ?>€</td>
                            <td> <input type="text" name="panier[quantite][<?php echo $product->pro_id;?>]" value="<?php echo $_SESSION['panier'][$product->pro_id];?>"></td>
                            <td><?php echo number_format ($product->pro_prix, 2,',',' '); ?>€</td>
                            <td><a href="panier.php?delPanier=<?php echo $product->pro_id;?>" class="small delete_forever text-decoration-none text-dark">DEL</a></td>
                            <!--look fc material icon css-->
                            </tr>

                        <?php endforeach ?>
                        </tbody>
                    </table>

                    <div class="float-right " id="total">
                            <input type="submit" value="RECALCULER">
                      <h3> <small> Total panier </small><span class="total"><?php echo number_format ($panier->total(), 2,',',' '); ?>€</span></h3>
                    </div>

                    <div class="float-right mx-3" id="payer"><a href="#" class="btn btn-secondary"> <h3>PAYER</h3> </a>
                    </div>
                </div>
                </form>   
<!--fin form-->
               
            </div>
        </div>
    </div>

    <?php include("cc/footer.php");?>