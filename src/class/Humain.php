<?php
namespace App;


use DateTime;


class Humain
{


    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;


    public function __construct(string $nom, string $prenom, DateTime $dateNaissance)
    {
        if (strlen($nom) > 0)
            $this->nom = $nom;
        if (strlen($prenom) > 0)
            $this->prenom = $prenom;


        //Test inutil car d'après la déclaration du constructeur
        // $dateNaissance est différent de null
        // if($dateNaissance != null)
       
        $this->dateNaissance = $dateNaissance;
    }


    public function getNom(): string
    {
        return $this->nom;
    }


    public function getPrenom(): string
    {
        return $this->prenom;
    }


    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }


    public function setNom(string $nom): void
    {
        if (strlen($nom) > 0) {
            $this->nom = $nom;
        }
    }


    public function setPrenom(string $prenom): void
    {
        if (strlen($prenom) > 0) {
            $this->prenom = $prenom;
        }
    }


    public function setDateNaissance(DateTime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }  


    public function donneTexte():string{
        return $this->prenom." ".$this->nom." né(e) le ".$this->dateNaissance->format('d/m/Y');
    }


}
