<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Panier extends CI_Controller 

{
    public function liste()
    {
    $this->load->view('header');
    $this->load->view('footer');
    $this->load->database();
    $this->load->library('session');
    }

    private $DB;

    public function __construct($DB)
    {
        if(!isset($this->session))
        {
            session_start();
        }
// start to replace igniter code
        if(!isset($this->session->panier))
        {
            $this->session['panier'] = array();
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
         
           foreach($this->session['panier'] as $product_id => $quantite)
            {
                if(isset ($_POST['panier']['quantite'][$product_id]))
                {
                    $this->session['panier'][$product_id] = $_POST['panier']['quantite'][$product_id];

                }
            }
        }

        public function count()
        {
            return array_sum($this->session['panier']);
        }

        public function total()
        {
            $total = 0;
            $ids = array_keys($this->session['panier']); 
            if(empty($ids))
            {
                $products = array();
            }
            else{
                $products = $this->DB->query('SELECT pro_id, pro_prix FROM produits WHERE pro_id IN(' . implode(',', $ids) .')');
            }
            foreach ($products as $product)
            {
                $total += $product->pro_prix * $this->session['panier'][$product->pro_id];
            }
            return $total;
        }

        public function add($product_id)
        {

            if (isset($this->session['panier'][$product_id]))
            {
                $this->session['panier'][$product_id]++;
            }
            else
            {
                $this->session['panier'][$product_id]=1;
            }
        }

        public function del($product_id)
        {
            unset($this->session['panier'][$product_id]);
        }
}
?>