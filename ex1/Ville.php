<?php

class Ville {
    private $Nom, $Gouvernorat;

    public function __construct($Nom, $Gouvernorat)
    {
     $this->Nom=$Nom;
     $this->Gouvernorat=$Gouvernorat;   
    }

    public function __toString()
    {
        return "La ville : ". $this->Nom . " est dans le gouvernorat : ". $this->Gouvernorat;
    }
}