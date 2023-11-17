<?php
require_once('Personne.php');

class Adulte extends Personne {
    private $metier,$salaire;

    public function __construct($Nom,$Prenom,$metier,$salaire)
    {
        parent::__construct($Nom,$Prenom);
        $this->metier=$metier;
        $this->salaire=$salaire;
    }

    public function __getInfo() {
         return "<u>" ."Adulte" ."</u>".'<br>' . '<br>' .
                "Nom :" . $this->Nom. '<br>'.
                "Prenom :" . $this->Prenom . '<br>' . 
                "Metier :" . $this->metier . '<br>' . 
                "Salaire :" . $this->salaire . '<br>';
        

    }
}
?>