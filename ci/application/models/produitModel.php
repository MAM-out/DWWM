<?php

if (!defined('BASEPATH')) exit('no direct scriptp access allowed');

/**
 * Description of produitModel
 * Model concernant la table produits de la base jarditou
 * Affichage de la liste des produits
 * @author ced27
 */
class produitModel extends CI_model {

    /**
     * Affichage de la liste des produits
     */
    public function list() {
        //appel de la methode database -> permet la connexion à la base de données.
        $this->load->database();
        // stockage de la requète dans une variable
        $query = "SELECT * from produits";
        // exécution de la requète
        $result = $this->db->query($query);
        // récupération des résultats
        $productList = $result->result();
        return $productList;
        }
    }    