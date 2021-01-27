<?php
defined('BASEPATH') OR exit('No direct script access allowed');      

class Produits extends CI_Controller 
// le controleur
{
    public function liste()
    {
       //code html direct // echo "Votre première page !";
       // methode list est son equivalent :
       //$this->load->view('liste');

        // Déclaration du tableau associatif à transmettre à la vue
        $aView = array("prenom"=>"Dave", "nom"=>"&nbsp; Loper");     

        /*// On passe le tableau en second argument de la méthode puis  le tableau b aussi
        $this->load->view('header');
        $this->load->view('liste', $aView);
        $this->load->view('footer');*/


         // Déclaration du tableau  à transmettre à la vue
         $aProduits = ["Aramis", "Athos", "Clatronic", "Camping", "Green"]; 
         foreach ($aProduits as $value) 
         { 
            echo $value."<br>";   
         }  
         
         // j\'ai du mal à comprendre pour l\'instant, je le vois bien que ce n\'est pas cela la méthode 
         // ca va bien ce débloquer à un moment ^^


         /* Un premier tableau à passer au morceau de vue 'header',
        * celui-ci contient une valeur pour la balise <title> de la page
        $aViewHeader = ["title" => "Liste des produits"];
        Un second tableau à passer au morceau de vue 'liste'
        * celui-ci contient la liste des produits (résultats de requête SQL) 

        $aViewListe = ["aProduits" => $aProduits]; */

        
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
        public function ajouter()
        {
        // Chargement des assistants 'form' et 'url'
        // suppr par $autoload dans config $this->load->helper('form', 'url'); 

        // Chargement de la librairie 'database'
        $this->load->database(); 

        // Chargement de la librairie form_validation
        // suppr par $autoload dans config $this->load->library('form_validation'); 

        // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
        $produit = $this->db->query("SELECT * FROM produits WHERE id= ?", $id);
        $aView["produit"] = $produit->row(); // première ligne du résultat

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();

            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'

            $this->form_validation->set_rules("pro_ref", "Référence", "required", array("required" => "Le %s doit être obligatoire.") );
            // ou plus simple :   $this->form_validation->set_rules('pro_ref', 'Référence', 'required');

            if ($this->form_validation->run() == FALSE)
            { // Echec de la validation, on réaffiche la vue formulaire 

                $this->load->view('ajouter');
               // $this->load->view('modifier', $aView);

            }
            else
            { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base

                $this->db->insert('produits', $data);
                /*
                        $this->db->where('pro_id', $id);
                        $this->db->update('produits', $data);*/
                redirect("produits/liste");
            }       
        } 
        else 
        { // 1er appel de la page: affichage du formulaire
            $this->load->view('ajouter');
            // $this->load->view('modifier', $aView);

        }
    } // -- ajouter() 
    
}