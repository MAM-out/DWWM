<?php
// crea class 
class Personnage 
{
    private $_degats;
    private $_experience;
    private $_force;

    /*/ le constrcuteur permet d entree les variables de l'objet

    public function __construct($_force, $_degats)
    {
        echo 'le construteur';
        $this->setForce($force);
        $this->setDegats($degats);
        $this->_experience = 1;
    }
*/

    public function __construct($force, $degats) // Constructeur demandant 2 paramètres
    {
    echo 'Voici le constructeur !'; // Message s'affichant une fois que tout objet est créé.
    $this->setForce($force); // Initialisation de la force.
    $this->setDegats($degats); // Initialisation des dégâts.
    $this->_experience = 1; // Initialisation de l'expérience à 1.
    }

    // crea d'une methode (une Fc faite d'instructions)

    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }

    // crea d'une methode (une Fc faite d'instructions)

    public function gagnerExperience()
    {
        $this->_experience++;
    }

    // crea des mutateurs (fc/method) qui modifient les attributs de la classe

    public function setForce($force)
    {
       if(!is_int($force)) 
       // nb pas entier
        {
            trigger_error('Mettre un nombre entier', E_USER_WARNING);
            return;
        }
        if($force > 100) 
        // ne pas depasser 100
         {
             trigger_error('la force doit etre au max à 100', E_USER_WARNING);
             return;
         }
        $this->_force = $force;

    }

    public function setExperience($experience)
        {
        if(!is_int($experience)) 
        // nb pas entier
            {
                trigger_error('Mettre un nombre entier', E_USER_WARNING);
                return;
            }
            if($experience > 100) 
            // ne pas depasser 100
            {
                trigger_error('l\'expérience doit etre au max à 100', E_USER_WARNING);
                return;
            }
            $this ->_experience = $experience;
        }

        // Mutateur chargé de modifier l'attribut $_degats.
        public function setDegats($degats)
        {
            if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
            {
            trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
            }

            $this->_degats = $degats;
        }

    
    // crea des accesseurs des attributs en creant des fonctions / methodes

    public function experience()
    {
        return $this->_experience;
    }

    public function degats()
    {
        return $this->_degats;
    }    
    
    public function force()
    {
        return $this->_force;
    }
}

// crea des perso

$perso1 = new Personnage(60, 0);
$perso2 = new Personnage(100, 10);

// attributions de valeurs

$perso1->setForce(10);
$perso1->setExperience(2);
$perso2->setForce(90);
$perso2->setExperience(58);

// actions

$perso1->frapper($perso2); 
$perso1->gagnerExperience();

$perso2->frapper($perso1); 
$perso2->gagnerExperience();

// bilan de leur attributs

echo 'Perso1 a', $perso1->force(), 'de force, et perso 2 a ', $perso2->force(), 'de force. <br>';

echo 'Perso1 a', $perso1->experience(), 'd\' experience, et perso 2 a ', $perso2->experience(), 'd\' experience. <br>';

echo 'Perso1 a', $perso1->degats(), 'de degats, et perso 2 a ', $perso2->degats(), 'de degats. <br>';



?>



