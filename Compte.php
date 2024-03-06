<?php

class Compte{
   
    private string $libelle;
    private float $soldeInitial;
    private string $deviseMonetaire;
    private Titulaire $titulaire;

    public function __construct(string $libelle, float $soldeInitial,
    string $deviseMonetaire, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->deviseMonetaire = $deviseMonetaire;
        $this->titulaire = $titulaire;
    }


    public function getLibelle(): string
    {
        return $this->libelle;
    }

   
    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

  
    public function getSoldeInitial(): float
    {
        return $this->soldeInitial;
    }

    
    public function setSoldeInitial(float $soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;

        return $this;
    }

    
    public function getDeviseMonetaire(): string
    {
        return $this->deviseMonetaire;
    }

  
    public function setDeviseMonetaire(string $deviseMonetaire)
    {
        $this->deviseMonetaire = $deviseMonetaire;

        return $this;
    }

  
    public function getTitulaire(): Titulaire
    {
        return $this->titulaire;
    }

   
    public function setTitulaire(Titulaire $titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function __tostring(){
        return $this->libelle;
    }
}