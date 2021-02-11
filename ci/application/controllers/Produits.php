<?php
defined('BASEPATH') OR exit('No direct script access allowed');      

class Produits extends CI_Controller 
{
    public function liste()
    {
    $this->load->view('header');
    $this->load->view('footer');
    
    
    $this->load->database();

    $results = $this->db->query("SELECT * FROM produits");  
    $aListe = $results->result();   
    $aView["liste_produits"] = $aListe;
    $this->load->view('liste', $aView);
    }

    // AJOUTER
    public function ajouter()   
    {
    $this->load->helper('form', 'url'); 
    $this->load->database();

    $this->load->library('form_validation'); 

        if ($this->input->post()) 
        { 
                $data = $this->input->post();
                $this->form_validation->set_rules("pro_ref", "Référence", "required");

                if ($this->form_validation->run() == FALSE)
                { 
                    $this->load->view('ajouter');
                }
                else
                { 
                    $this->db->insert('produits', $data);
                    redirect("produits/liste");
                }       
            } 
            else 
            { 
                $this->load->view('ajouter');
            }
        } // -- ajouter() 

        // MODIFIER
        public function modifier()
        {
            $this->load->helper('form', 'url'); 
            $this->load->database();

            $this->load->library('form_validation'); 

            // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
            $produit = $this->db->query("SELECT * FROM produits");
            $aView["produit"] = $produit->row(); // première ligne du résultat

            if ($this->input->post()) 
            {
            $data = $this->input->post();
            $this->form_validation->set_rules('pro_ref', 'Référence', 'required');

            if ($this->form_validation->run() == FALSE)
            { 
                $this->load->view('modifier', $aView);
            }
            else
            { 
                $this->db->where('pro_id', $id);
                $this->db->update('produits', $data);

                redirect("produits/liste");
            }
            } 
            else 
            {            
            $this->load->view('modifier', $aView);
            }
        } // -- modifier()


}