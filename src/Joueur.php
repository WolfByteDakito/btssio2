<?php
namespace App;
use DateTime;


class Joueur extends Humain{
    private int $numero;


    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, int $numero)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->numero = $numero;
    }


    public function getNumero(): int
    {
        return $this->numero;


    }


    public function setNumero(int $numero): void
    {
        if($numero > 0 && $numero < 27){
            $this->numero = $numero;
        }


    }  


    public function donneTexte(): string{
        return "nom : ".$this->getNom(). " prenom : ".$this->getPrenom()  . ' (' . $this->numero . ')';
    }




}
