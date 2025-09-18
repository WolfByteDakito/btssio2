<?php
namespace App;
use DateTime;


class Joueur extends Humain{
    private int $numero;

     private ?Equipe $equipe;


    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, int $numero, ?Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->numero = $numero;
        $this->equipe = $equipe;
        $this->equipe->ajouterJoueur($this);
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

public function getEquipe(): Equipe
    {
        return $this->equipe;
    }


    public function setEquipe(?Equipe $equipe): void
    {


        if ($this->equipe == null) {
            echo "1";
            $this->equipe = $equipe;
            $equipe->ajouterJoueur($this);
        } else {
            if ($equipe != $this->equipe) {
                echo "2";
                if ($equipe != null) {
                    if ($this->equipe != null) {
                        $this->equipe->retirerJoueur($this);
                        echo "4";
                    }


                    $this->equipe = $equipe;
                    $equipe->ajouterJoueur($this);
                    echo "5";
                }
            }
        }
    }

    public function donneTexte(): string
    {
        if($this->equipe == null)
            return "nom : " . $this->getNom() . " prenom : " . $this->getPrenom() . ' (' . $this->numero . ')';
        else
            return "nom : " . $this->getNom() . " prenom : " . $this->getPrenom() . ' (' . $this->numero . ')' . " " . $this->equipe->getNom();
       
    }






}

