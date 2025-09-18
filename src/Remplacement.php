<?php 

namespace App;
use Datetime;

class Remplacement extends Evenement
{

    private ?Joueur $joueurSortant;
    private ?Joueur $joueurEntrant;

    public function __construct(Datetime $horaire, string $description, ?Joueur $joueurSortant, ?Joueur $joueurEntrant)
    {
        parent::__construct($horaire, $description);
        $this->joueurSortant = $joueurSortant;
        $this->joueurEntrant = $joueurEntrant;
        
    }

    public function getJoueurSortant(): ?Joueur
    {
        return $this->joueurSortant;
    }

    public function getJoueurEntrant(): ?Joueur
    {
        return $this->joueurEntrant;
    }   

    public function setJoueurSortant(?Joueur $joueurSortant): void
    {
        $this->joueurSortant = $joueurSortant;
    }

    public function setJoueurEntrant(?Joueur $joueurEntrant): void
    {
        $this->joueurEntrant = $joueurEntrant;
    }

    public function donneTexte(): string 
    {
        return $this->joueurEntrant . " " . $this->joueurSortant;
    }

}