<?php
$titre = "Retrouvez tous nos produits ici";
$description = "Du barbecue à la pelle en passant par le taille-haie ou encore le parasol, trouvez vore bonheur chez Jarditou ";
?>
<?php include("cc/header.php"); ?>



<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">PRODUITS</h1>
</div>

<!--ligne 1-->
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
  <?php $products = $DB->query('SELECT * FROM produits'); ?>
    <?php foreach ($products as $product): ?>

          <!--colonnes-->
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 fw-normal"><?php echo $product->pro_libelle ?></h4>
              </div>
              <div class="card-body">
                <img src="/assets/img/<?php echo $product->pro_id; ?>.jpg" class="card-img-top p-4 h-50" alt="<?php echo $product->pro_libelle; ?>" title="Barbek Aramis" width="150px">
                <h1 class="card-title pricing-card-title"><?php echo number_format ($product->pro_prix, 2,',',' '); ?>€</h1>
                <ul class="list-unstyled mt-3 mb-4">
                        <li><?php echo $product->pro_libelle ?></li>
                        <li><small><?php  echo $product->pro_description ?></small></li>
                        <li><?php echo $product->pro_couleur ?></li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-secondary">
                <a class="add addPanier text-decoration-none text-dark" href="cc/addpanier.php?id=<?php echo $product->pro_id; ?>">Ajouter au panier</a></button>
              </div>
            </div>
          </div> <!--fincol1-->      

    <?php endforeach ?>

 

</div> <!--finligne1-->


    

       
       

<?php include("cc/footer.php");?>