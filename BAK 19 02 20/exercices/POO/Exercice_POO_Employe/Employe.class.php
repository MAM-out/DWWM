<?php

// crea class 
class Employe //extends Agence

{   /////////// proprietes ///////////
    private $_nom;
    private $_prenom;
    private $_date_embauche = 'd/m/Y';
    private $_fc_poste;
    private $_salaire_brut;
    private $_service_employe;
    
    /////////// methodes ///////////
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

    
      // les SET / Affectation /accesseurs permettant de modifier les valeurs d attributs
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

     // les Getters récupérer la valeur contenue dans la propriété
     public function getNom()
     {
         return $this->_nom;
      }
 
     public function getPrenom()
     {
         return $this->_prenom;
     }
 
     public function getDate_embauche()
     {
         return $this->_date_embauche;
     }
 
     public function getFc_poste()
     {
         return $this->_fc_poste;
     }
 
     public function getSalaire_brut()
     {
         return $this->_salaire_brut;
     }
     
     public function getService_employe()
     {
         return $this->_service_employe;
     }


      
    // methode combien d'années en fc ?
    /*si le mois d'entrée est antérieur au mois actuel, ou bien, si le jour d'entrée est inférieur ou égal au jour actuel lorsque le mois d'entrée est égal au mois actuel, alors l’ancienneté est la différence entre l’année en cours et l’année d'entrée.
    sinon l’ancienneté est la différence entre l'(année en cours – 1) et l’année d'entrée.*/
 

    // juste pour verifier 
    public function __toString()
    {
        $lesInfosEmployes = "";
        foreach($this as $valeur)
        {
        $lesInfosEmployes .= "$valeur-";
        }
        return $lesInfosEmployes;

    }

     /*
    public function anciennete()
    {
        $datenow = new date (NOW);
        // voir le reel
        $interval = $date_embauche->dif($datenow);
        return $interval->y;
   
        $am = explode('/', $date_embauche);
        $an = explode('/', date('d/m/Y'));
        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;*/

/*
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
            echo 'l'ordre de transfert de la prime de ' .$prime. 'a bien été envoyé';

            // si date du mois est j=30 ou j=28 pour fev pour une année normale ou j=29 pour une année bisextile 
            // alors ordre = paiement de la prime
      }
 
      */

} // fin classe


?>




