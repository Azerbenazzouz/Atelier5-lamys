<?php
require_once('Personne.php');

class Adolescent extends Personne{
        private $age,$loisir;
        
        public function __construct($Nom,$Prenom,$age,$loisir)
        {
            parent::__construct($Nom,$Prenom);
            $this->age=$age;
            $this->loisir=$loisir;
        }
        public function __getInfo() {
            return "<u>" ."Adolescent" ."</u>".'<br>' . '<br>' . 
            "Nom :" . $this->Nom. '<br>'.
            "Prenom :" . $this->Prenom . '<br>' . 
            "Age :". $this->age . '<br>' . 
            "Loisir :" . $this->loisir;
    
    }
}
?>