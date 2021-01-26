<?php
defined('BASEPATH') OR exit('No direct script access allowed');      

class Produits extends CI_Controller 
{
    public function liste()
    {
       //code html direct // echo "Votre première page !";
       // methode list est son equivalent :
       $this->load->view('nom_de_la_vue');

    }
}