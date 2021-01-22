<?php
class Compteur
{
// variable compteur
    private static $_compteur = 0;

// constructeur
    public function __construct()
    {
        self::$_compteur++;
    }

// methode qui renvoie la valeur du compteur
  
    public static function getCompteur()
    {
        return self::$_compteur;
    }
}

$test1= new Compteur;
$test2= new Compteur;
$test3= new Compteur;

echo Compteur::getCompteur();

?>
