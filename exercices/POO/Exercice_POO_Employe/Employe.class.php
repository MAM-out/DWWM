<?php

// crea class 
class Employe 
{
    private $_nom;
    private $_prenom;
    private $_date_embauche = 'd/m/Y';
    private $_fc_poste;
    private $_salaire_brut;
    private $_service_employe;

    /*methode pour renvoyer les infos employes 
    public function infoEmploye()
    {
        echo $this->_nom;
        echo ' ';
        echo $this->_prenom;
        echo ' ';
        echo $this->_date_embauche;
        echo ' ';
        echo $this->_fc_poste;
        echo ' ';
        echo $this->_salaire_brut;
        echo ' ';
        echo $this->_service_employe;
    }*/
        
    // creation d'un constructeur initialisateur
    public function __construct($nom, $prenom, $date_embauche, $fc_poste, $salaire_brut, $service_employe) 

    {
        $this->_nom = $nom; 
        $this->_prenom = $prenom; 
        $this->_date_embauche = $date_embauche; 
        $this->_fc_poste = $fc_poste; 
        $this->_salaire_brut = $salaire_brut; 
        $this->_service_employe = $service_employe; 
    }

    // les GET / setters renvoyant les contenus d attributs | récupérer la valeur contenue dans la propriété
    public function nom()
    {
        return $this->_nom;
     }

    public function prenom()
    {
        return $this->_prenom;
    }

    public function date_embauche()
    {
        return $this->_date_embauche;
    }

    public function fc_poste()
    {
        return $this->_fc_poste;
    }

    public function salaire_brut()
    {
        return $this->_salaire_brut;
    }
    
    public function service_employe()
    {
        return $this->_service_employe;
    }

    // les SET / accesseurs renvoyant les contenus d attributs
    public function setNom($nom)
    {
        $this->_nom = $nom;
     }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setDateEmbauche($date_embauche)
    {
        $this->_date_embauche = $date_embauche;
    }

    public function setFcPoste($fc_poste)
    {
        $this->_fc_poste = $fc_poste;
    }

    public function setSalaireBrut($salaire_brut)
    {
        $this->_salaire_brut = $salaire_brut;
    }

    public function setServiceEmploye($service_employe)
    {
        $this->_service_employe = $service_employe;
    }
      
    // methode combien d'années en fc ?
    /*si le mois d'entrée est antérieur au mois actuel, ou bien, si le jour d'entrée est inférieur ou égal au jour actuel lorsque le mois d'entrée est égal au mois actuel, alors l’ancienneté est la différence entre l’année en cours et l’année d'entrée.
    sinon l’ancienneté est la différence entre l'(année en cours – 1) et l’année d'entrée.
    */
    public function anciennete()
    {
        $this->_date_embauche = $date_embauche; 
        $am = explode('/', $date_embauche);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;
        
       

    }

    // methode calcul de la prime 
      public function calculPrime($prime)
      {
          if ($anciennete<5)
          {
              $prime =  ($salaire_brut * 0.02);
          }
          else if ($anciennete<10)
          {
              $prime =  ($salaire_brut * 0.05);
          }
          else
          {
              $prime =  ($salaire_brut * 0.1);
          }
            return $prime;
      }
 


} // fin classe


?>




