<?php
abstract class Personne {
    protected $Nom, $Prenom;

    public function __construct($Nom,$Prenom){
        $this->Nom=$Nom;
        $this->Prenom=$Prenom;
    }
    abstract public function __getInfo();
}
    ?>