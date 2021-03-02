<?php
include('db.class.php');
$db = new DB('liste');
$datas = $db->query('SELECT * FROM regions');

?>


<!--ligne 1-->
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <?php foreach ($db->query('SELECT * FROM regions') as $liste):  ?>

          <!--colonnes-->
          <div class="col">
          <option value='<?php  echo $liste->reg_id ?>'><?php  echo $liste->reg_v_nom;  '<br>' ?></option>
          
          </div>
            
            

    <?php endforeach ?>
    </div> <!--fincol1-->  