<?php

class Titulaire{

    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptesbancaires;


    public function __construct(string $nom, string $prenom, string $dateNaissance,
    string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->comptesbancaires = [];
    }

    public function getNom(): string
    {
        return $this->nom;
    }


    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

   
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

   
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    
    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

  
    public function setVille(string $ville)
    {
        $this->ville = $ville;

        return $this;
    }

   
    public function getComptesbancaires(): array
    {
        return $this->comptesbancaires;
    }
    
    
    public function setComptesbancaires(array $comptesbancaires)
    {
        $this->comptesbancaires = $comptesbancaires;
        
        return $this;
    }

    public function calcAge(){   
        return $this->dateNaissance->diff(new DateTime())->y;
    }
        
    public function addComptesbancaires(Compte $comptebancaire){
        $this->comptesbancaires[] = $comptebancaire;
    }
    
    
    public function afficherComptesbancaires(){
        $result = "<h2>Comptes bancaires de $this</h2>";
        
        foreach ($this->comptesbancaires as $comptebancaire){
            $result .= $comptebancaire->getLibelle()."<br>". $comptebancaire->getsoldeinitial()
            .$comptebancaire->getdevisemonetaire()."<br>". $comptebancaire->getTitulaire()."<br>";
            
        }
        return $result; 
    }

    public function getInfos(){
        return $this->nom. $this->prenom. $this->ville. $this->dateNaissance->diff(new DateTime())->y. "ans.";
    }      
    
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}




