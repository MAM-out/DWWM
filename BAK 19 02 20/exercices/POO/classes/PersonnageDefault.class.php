<?php

// crea class 
class Personnage 
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    // methode pour renvoyer les attributs

    public function infoPerso()
    {
        echo $this->_nom;
        echo ' ';
        echo $this->_prenom;
        echo ' ';
        echo $this->_age;
        echo ' ';
        echo $this->_sexe;
    }
    
    // creation d'un constructeur initialisateur

    public function __construct($nom, $prenom, $age, $sexe) 
    {
        $this->_nom = $nom; 
        $this->_prenom = $prenom; 
        $this->_age = $age; 
        $this->_sexe = $sexe; 
    }

    // accesseurs renvoyant les contenus d attributs
    public function nom()
    {
        return $this->_nom;
     }

    public function prenom()
    {
        return $this->_prenom;
    }

    public function age()
    {
        return $this->_age;
    }

    public function sexe()
    {
        return $this->_sexe;
     }

    // accesseurs renvoyant les contenus d attributs
    public function setNom($nom)
    {
        $this->_nom = $nom;
     }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function setSexe($sexe)
    {
        $this->_sexe = $sexe;
     }


} // fin classe

// crea perso
$perso = new Personnage('Loper','Dave','18 ans','masculin');

// afficher les infos
echo $perso->infoPerso();

?>




