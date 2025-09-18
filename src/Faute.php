<?php 

namespace App;

use Datetime;

class Faute extends FaitDeJeu 
{
    private ?Joueur $joueurVictime;
    private string $carton;

    public function __construct(Datetime $horaire, string $description, ?Joueur $joueurAuteur, ?Joueur $joueurVictime, string $carton)
    {
        parent::__construct($horaire, $description, $joueurAuteur);
        $this->joueurVictime = $joueurVictime;
        $this->carton = $carton;

    }

    public function getJoueurVictime(): ?Joueur
    {
        return $this->joueurVictime;
    }

    public function setJoueurVictime (?Joueur $joueurVictime): void
    {
        $this->joueurVictime = $joueurVictime;
    }

    public function getCarton(): string
    {
        return $this->carton;
    }

    public function setCarton(string $carton): void
    {
        $this->carton = $carton;
    }   

    public function donneTexte(): string
    {
        return $this->joueurVictime . " " . $this->carton;
    }
}