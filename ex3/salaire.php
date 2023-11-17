<?php
class Salaire{
    protected $code, $nom, $prenom, $salairebase, $indemnite;

    public function __construct($code,$nom,$prenom,$salairebase,$indemnite){
        $this->code=$code;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->salairebase=$salairebase;
        $this->indemnite=$indemnite;
    }
    
    public function __calculSalaire(){
        return $this->salairebase+$this->indemnite;
    }
    public function __infoSalaire(){
        return '<br>' . "Le code : " . $this->code .'<br>' .
                "Le nom : " .$this->nom .'<br>' .
                "Le prenom : " .$this->prenom .'<br>' .
                "Le salaire : " .$this->salairebase .'<br>' .
                "L'indemnité : " .$this->indemnite .'<br>';

    }
}

?>
