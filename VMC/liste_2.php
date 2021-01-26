<?php
 $db=new PDO('mysql:host=localhost;dbname=jarditou;port=3308;charset=utf8', "root","");

 $result = $db->query ("select * from liens");

 $model = Array();
 while ( $lien = $result->fetch(PDO::FETCH_OBJ) ) 
    {
        $model[] = $lien;
    }
 $result->closeCursor();

 require("vue2.php");
 ?>
