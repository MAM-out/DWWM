<?php include("cc/header.php");?>

    <div id="#" class="clearfix">
        <div class="checkout">
            <div class="title">
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h2 class="display-4">PRODUITS</h2>
                </div>
            </div>
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

                        $products = $DB->query('SELECT * FROM produits WHERE pro_id IN(' . implode(',', $ids) .')');
                        //var_dump($products);
                        
                        foreach ($products as $product) :?>

                            <tr>
                            <th scope="row">1</th>
                            <td><a href="#"class="img"><img class="w-25" src="/assets/img/19.jpg"></a></td>
                            <td>Nom du produit</td>
                            <td><?php echo number_format ($product->pro_prix, 2,',',' '); ?>€</td>
                            <td>3</td>
                            <td><?php echo number_format ($product->pro_prix, 2,',',' '); ?>€</td>
                            <td><a href="panier.php?del=<? echo $product->pro_id;?>" class="small delete_forever text-decoration-none text-dark">DEL</a></td>
                            <!--look fc material icon css-->
                            </tr>

                        <?php endforeach ?>

                        </tbody>
                    </table>

                    <div class="float-right " id="total">
                      <h3> <small> Total panier </small><span class="total">2640,18€</span></h3>
                    </div>

                    <div class="float-right mx-3" id="payer"><a href="#" class="btn btn-secondary"> <h3>PAYER</h3> </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include("cc/footer.php");?>