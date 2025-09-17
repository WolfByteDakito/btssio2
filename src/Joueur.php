<?php 

namespace App;

use DateTime;   

class Joueur extends Humain
{
    private int $numero;

    public function __construct($nom, $prenom, $datenaissance, $numero)
    {
        parent::__construct($nom, $prenom, $datenaissance);
        $this->numero = $numero;

    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): void
    {
        $this->$numero = $numero;
    }

    public function donneTexte():string 
    {
        return "nom : ".$this->getNom(). " prenom : ".$this->getPrenom()  . ' (' . $this->numero . ')';
    }
}