<?php
namespace App;

use DateTime;

class FaitDeJeu extends Evenement
{

    private ?Joueur $joueurauteur;
    public function __construct(DateTime $horaire, string $description, ?Joueur $joueurauteur)
    {
        parent::__construct($horaire, $description);
        $this->joueurauteur = $joueurauteur;
    }

    public function getJoueurauteur(): ?Joueur
    {
        return $this->joueurauteur;
    }

    public function setJoueurAuteur(?Joueur $joueurAuteur): void
    {
        $this->joueurAuteur = $joueurAuteur;
    }

    public function donneTexte(): string
    {
        return $this->joueurauteur;   
    }
}