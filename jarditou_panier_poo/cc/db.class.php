<?php
/**
* \brief connexion à la base de données
* \param  $db   tableau récuppèrant les ≠ id ajoutées du panier
* \param  $sql  valeurs a envoyer à la table, requete sql 
* \param  $data parametre nomdutag => valeur
* \param  $req   Récupération de toutes les lignes   
* \author Marion Mounier
* \date 26/02/2020
*/
Class DB
{
    private $host = 'localhost';
    private $username = 'root';
    private $password ='';
    private $database ='jarditou';
    //private $port = '3308'; pourquoi je ne peux le mettre en objet ?
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null)
    { if ($host != null)
        {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
        try 
        {
        $this->db = new PDO('mysql:host='.$this->host.';port=3308;dbname='.$this->database, $this->username, $this->password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }
        catch (PDOException $e) 
        {
            echo 'Erreur : ' . $e->getMessage() . '<br>';
            echo 'N° : ' . $e->getCode() . '<br>';
            die('<h1>Imposssible de se connecter à la base de données</h1>');
        } 
    }


    public function query($sql, $data = array())
    {
        $req=$this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

}
