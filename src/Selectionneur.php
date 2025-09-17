<?php
namespace App;


class Selectionneur extends Humain
{
    private string $nationalite;
    private ?Equipe $equipe = null;


    public function __construct(string $nom, $prenom, $datenaissance, string $nationalite, ?Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $datenaissance);
        $this->nationalite = $nationalite;
        if ($equipe != null) {
            if($equipe->getSelectionneur() != null) {
                $equipe->getSelectionneur()->setEquipe(null);
               
            }
            $equipe->setSelectionneur($this);
            $this->equipe = $equipe;
        }




    }


    public function getNationalite(): string
    {
        return $this->nationalite;
    }


    public function setNationalite(string $nationalite): void
    {
        $this->nationalite = $nationalite;


    }


    public function donneTexte(): string
    {
        if( $this->equipe != null ) {
            return "nom : " . $this->getNom() . " prenom : " . $this->getPrenom() . ' (' . $this->nationalite . ')';
        }else {
            return "nom : " . $this->getNom() . " prenom : " . $this->getPrenom(). 'sans équipe';
        }
    }


    public function getEquipe(): Equipe
    {
        return $this->equipe;
    }


    public function setEquipe(?Equipe $equipe): void
    {
        if($this->equipe != $equipe)
        {
            if($this->equipe != null)
                $this->equipe->setSelectionneur(null);
            $this->equipe = $equipe;
            if($equipe != null)
                $equipe->setSelectionneur($this);
           
        }
    }
}
