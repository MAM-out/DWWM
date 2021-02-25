<?php
require 'localhost/ci/index.php/db.class.php';
require 'localhost/ci/index.php/panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>