<?php
class panier 
{
        private $DB;

        public function __construct($DB)
        {
            if(!isset($_SESSION))
            {
                session_start();
            }

            if(!isset($_SESSION['panier']))
            {
                $_SESSION['panier'] = array();
            }
            $this->DB= $DB;

            if(isset($_GET['delPanier']))
            {
                $this->del($_GET['delPanier']);
            }
 
            if(isset($_POST['panier']['quantite']))
            {
                $this->recalc();
            }
        }

        public function recalc()
        {
         
           foreach($_SESSION['panier'] as $product_id => $quantite)
            {
                if(isset ($_POST['panier']['quantite'][$product_id]))
                {
                    $_SESSION['panier'][$product_id] = $_POST['panier']['quantite'][$product_id];

                }
            }
        }

        public function count()
        {
            return array_sum($_SESSION['panier']);
        }

        public function total()
        {
            $total = 0;
            $ids = array_keys($_SESSION['panier']); 
            if(empty($ids))
            {
                $products = array();
            }
            else{
                $products = $this->DB->query('SELECT pro_id, pro_prix FROM produits WHERE pro_id IN(' . implode(',', $ids) .')');
            }
            foreach ($products as $product)
            {
                $total += $product->pro_prix * $_SESSION['panier'][$product->pro_id];
            }
            return $total;
        }

        public function add($product_id)
        {

            if (isset($_SESSION['panier'][$product_id]))
            {
                $_SESSION['panier'][$product_id]++;
            }
            else
            {
                $_SESSION['panier'][$product_id]=1;
            }
        }

        public function del($product_id)
        {
            unset($_SESSION['panier'][$product_id]);
        }
}
?>