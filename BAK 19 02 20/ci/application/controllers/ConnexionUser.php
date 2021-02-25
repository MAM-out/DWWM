<?php

class ConnexionUser extends CI_Controller 
{
public function appel()
    {
        this->load->library('session');
        $this->session->set_userdata('role', "administrateur");
     

	/*	Chargement de notre bibliothèque session via la bibliothèque Load
    $this->load->library('session');
    
    $session_id = $this->session->userdata('session_id');

    $adresse_ip               = $this->session->userdata('ip_address');
    $user_agent_du_navigateur = $this->session->userdata('user_agent');
    $derniere_visite          = $this->session->userdata('last_activity');
    */
    }

}