<?php
namespace App;


class Selectionneur extends Humain
{
    private string $nationalite;


    public function __construct(string $nom, $prenom, $datenaissance, string $nationalite)
    {
        parent::__construct($nom, $prenom, $datenaissance);
        $this->nationalite = $nationalite;
    }


    public function getNationalite(): string
    {
        return $this->nationalite;
    }
    public function donneTexte(): string
    {
        return "nom : ".$this->getNom(). " prenom : ".$this->getPrenom()  . ' (' . $this->nationalite . ')';
    }
}
