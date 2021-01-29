<?php
defined('BASEPATH') OR exit('No direct script access allowed');      

class Produits_tableau extends CI_Controller 
// le controleur
    {
        public function liste()
         {
            // Déclaration du tableau associatif à transmettre à la vue
            $aView = array("prenom"=>"Dave", "nom"=>"&nbsp; Loper");     

            // Déclaration du tableau  à transmettre à la vue
            $aProduits = ["Aramis", "Athos", "Clatronic", "Camping", "Green"]; 
            foreach ($aProduits as $value) 
            { 
                echo $value."<br>";   
            }  
            
            // Appel des différents morceaux de vues
            $this->load->view('header');

            // Charge la librairie 'database'
            $this->load->database();

            // Exécute la requête 
            $results = $this->db->query("SELECT * FROM produits");  

            // Récupération des résultats    
            $aListe = $results->result();   

            // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
            $aView["liste_produits"] = $aListe;

            // Appel de la vue avec transmission du tableau  
            $this->load->view('liste', $aView);
            $this->load->view('footer');
        }

        public function modifier()
        {
            // Chargement de la librairie 'database'
            $this->load->database(); 

            // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
            $produit = $this->db->query("SELECT * FROM produits WHERE id= ?", $id);
            $aView["produit"] = $produit->row(); // première ligne du résultat

            if ($this->input->post()) 
            { // 2ème appel de la page: traitement du formulaire

                $data = $this->input->post();

                // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'

                $this->form_validation->set_rules('pro_ref', 'Référence', 'required');

                if ($this->form_validation->run() == FALSE)
                { // Echec de la validation, on réaffiche la vue formulaire 
                $this->load->view('modifier', $aView);
                }
                else
                { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base
                    $this->db->where('pro_id', $id);
                    $this->db->update('produits', $data);     
                    redirect("produits/liste");
                }       
            else 
            { // 1er appel de la page: affichage du formulaire
                $this->load->view('modifier', $aView);
            }
        }
    }
