<?php
namespace App;


use App\Selectionneur;


class Equipe
{
    private string $nom;
    private string $pays;
    private ?Selectionneur $selectionneur = null;
    public function __construct(string $nom, string $pays, ?Selectionneur $selectionneur)
    {
        $this->nom = $nom;
        $this->pays = $pays;
        if ($selectionneur != null) {
            if ($selectionneur->getEquipe() != null) {
                $selectionneur->getEquipe()->setSelectionneur(null);
            }
            $selectionneur->setEquipe($this);
        }
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
        return $this->selectionneur;
    }
    public function setSelectionneur(?Selectionneur $selectionneur): void
    {
        if ($this->selectionneur != $selectionneur) {
            if ($this->selectionneur != null) {
                $this->selectionneur->setEquipe(null);
            }
            $this->selectionneur = $selectionneur;
            if ($selectionneur != null) {
               
                $selectionneur->setEquipe($this);
            }
        }
    }
    public function donneTexte(): string
    {
        if ($this->selectionneur == null) {
            return $this->nom . " " . $this->pays . " sans sélectionneur";
        } else {
            return $this->nom . " " . $this->pays . " " . $this->selectionneur->getNom() . " " . $this->selectionneur->getPrenom();
        }
    }
}
