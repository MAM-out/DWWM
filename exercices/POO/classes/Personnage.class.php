<?php

// crea class 
class Personnage 
{
    public $_nom;
    public $_prenom;
    public $_age;
    public $_sexe;

    // crea d'une methode ( faite d'instructions avec cond et fc)

    public function creer()
    {
        echo 'Ton personnage est créer';
    }

}

$perso = new Personnage ;
$perso->creer(); 

?>




