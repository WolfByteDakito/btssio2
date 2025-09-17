<?php 

namespace App;

use PHPUnit\Util\PHP\JobRunnerRegistry;

class Equipe
{
    private string $nom;
    private string $pays;

    public function __construct(string $nom, string $pays)
    {
        $this->nom = $nom;
        $this->pays = $pays;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function getSelectionneur(): Selectionneur
    {
        return new Selectionneur($this->nom, $this->pays);
    }

    public function setSelectionneur(Selectionneur $selection): void
    {
        $this->pays = "";
        $this->nom = "";
    }

    public function getJoueur(): Joueur
    {
        return new Joueur($this->nom, $this->pays);
    }

    public function AddJoueur(Joueur $joueur): void
    {
        $this->joueur[] = $joueur;
        $joueur->AddJoueur($this);
    }

    public function donneTexte():string
    {
        
    }
}