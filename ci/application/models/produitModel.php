<?php

if (!defined('BASEPATH')) exit('no direct scriptp access allowed');

class produitModel extends CI_model {

    
// Affichage de la liste des produits

public function liste()
    {
    // Chargement du modèle 'produitsModel' avec le nouveau code
    $this->load->model('produitsModel');
    
    $aListe = $this->produitsModel->liste();

    $aView["liste"] = $aListe;

    $this->load->view('liste', $aListe);
    }
}    