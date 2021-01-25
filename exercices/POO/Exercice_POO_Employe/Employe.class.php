<?php

// crea class 
class Employe 
{
    private $_nom;
    private $_prenom;
    private $_date_embauche;
    private $_fc_poste;
    private $_salaire_brut;
    private $_service_employe;

    // methode pour renvoyer les infos employes 
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
    }

    // methode combien d'années en fc ?
    public function combienAnnees()
    {
       // $date = date("d/m/Y");
    }

    
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

    // accesseurs renvoyant les contenus d attributs
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

    // accesseurs renvoyant les contenus d attributs
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

} // fin classe

// crea Employes
$employe1 = new Employe('Loper','Dave','13/03/15', 'Conducteur travaux', '35k', 'Service Travaux');
//
$employe2 = new Employe('Geris','Mathieu','25/03/20', 'Comptable', '30k', 'Service Support');
// 
$employe3 = new Employe('Henri','Marie','25/05/12', 'Assitante BE', '25k', 'Service Travaux');
// 
$employe4 = new Employe('Namaris','Pauline','04/05/20', 'Account Manager', '35k', 'Service Support');
// 
$employe5 = new Employe('Rose','Paul','13/03/15', 'Responsable atelier','40k', 'Service Production');
// 
// afficher les infos
echo $employe1->infoEmploye();
echo '<br> ';
echo $employe2->infoEmploye();
echo '<br> ';
echo $employe3->infoEmploye();
echo '<br> ';
echo $employe4->infoEmploye();
echo '<br> ';
echo $employe5->infoEmploye();
echo '<br> ';
?>




