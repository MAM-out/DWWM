<?php
defined('BASEPATH') OR exit('No direct script access allowed');      

class Produits2 extends CI_Controller 
{
    public function liste()
    {
        $aViewHeader = ["title" => "Liste des produits"]; // tableau contenant la valeur | liste des produits | affichant dans view du header

        $aViewListe = ["aProduits" => "suite du texte" ]; // tableau contenant la  liste des produits |SQL| ca ca ne marche pas et je ne sais pourquoi : $aProduits

        $this->load->view('header', $aViewHeader);
        $this->load->view('liste2', $aViewListe);
        $this->load->view('footer');
    }

}