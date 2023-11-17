<?php
require_once"salaire.php";

class CONTRACTUEL extends Salaire{
        private $dateContrat, $typeContrat;

        public function __construct($code,$nom,$prenom,$salairebase,$indemnite,$dateContrat, $typeContrat)
        {
            parent::__construct($code, $nom, $prenom, $salairebase, $indemnite);
            $this->dateContrat=$dateContrat;
            $this->typeContrat=$typeContrat;
        }

        public function __infoSalaire()
        {
           return parent::__infoSalaire(). "La date du contrat est : ". $this->dateContrat . '<br>' ."Le type de contrat est : " . $this->typeContrat;
        }

}
?>