<?php
include('db.class.php');
$db = new DB('liste');
$datas = $db->query('SELECT * FROM departements');

?>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2 class="display-4">liste des départements en fonction de la région sélectionnée</h2>
</div>

<!--ligne 1-->
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <?php foreach ($db->query('SELECT * FROM departements ') as $liste):  ?>

          <!--colonnes-->
          <div class="col">
          <option value='<?php  echo $liste->dep_reg_id ?>'><?php  echo $liste->dep_nom;  '<br>' ?></option>
          
          </div>
            
            

    <?php endforeach ?>
    </div> <!--fincol1-->  