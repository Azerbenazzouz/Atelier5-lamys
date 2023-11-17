<?php
class MiseEnForme{
    private $chaine;

    public function __construct($chaine)
    {
     $this->chaine=$chaine;   
    }
    
    public function getChaine()
    {
        return $this->chaine;
    }

    public function setChaine($chaine): self
    {
        $this->chaine = $chaine;
        return $this;
    }

    public function __gras(){
        return "<b>". $this->chaine ."</b>";
    }
    public function __italique(){
        return "<i>". $this->chaine ."</i>";
    }
    public function __souligne(){
        return "<u>". $this->chaine ."</u>";
    }
    public function __majuscule(){
        return strtoupper($this->chaine);
    }
}