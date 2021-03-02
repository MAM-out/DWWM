<?php
/**
* \brief connexion à la base de données
* \param   
* \author Marion Mounier
* \date 01/03/2021
*/
Class DB
{
    private $database;
    private $username;
    private $password;
    private $host;
    private $db;

    public function __construct($database='test', $username = 'root', $password ='',$host = 'localhost')
    {
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->host = $host;
    }

    private function getPDO()
    {
        if($this->db === null)
        {
        $db = new PDO('mysql:dbname=test;host=localhost;port=3308','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
        }
        return $this->db;
    }

    public function query($statement)
    {
        $req = $this->getPDO()->query($statement);     
        $datas = $req->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
}
