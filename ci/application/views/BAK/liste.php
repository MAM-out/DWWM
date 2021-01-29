<?php include('header.php')?>

    <h1>Liste des produits</h1>
    <p>Bonjour <?php echo $prenom, $nom; ?> !</p>
  <!--   <p>Transmission du tableau ex 2 <?php //echo $value ?> !</p>-->
  <img src="<?php echo base_url("assets/images/photo.jpg"); ?>" alt="photo" title="photo" class="img-fluid"> 

  <div class="row">
    <div class="col-12">    
    <?php 
    foreach ($liste_produits as $row) 
    {
        echo"<p>".$row->pro_id."</p>";
        echo"<p>".$row->pro_ref."</p>";
        echo"<p>".$row->pro_libelle."</p>";
        echo"<p>".$row->pro_libelle."</p>";
        echo"<p>".$row->pro_description."</p>";     
    }
    ?>
    </div>

  <?php include('footer.php')?>
