<?php 
namespace App;


class Stade
{
    private string $nom;
    private string $ville;
    private int $capacite;

    private ?Equipe $equipeHabituelle = null;

    public function __construct(string $nom, string $ville, int $capacite, ?Equipe $equipeHabituelle) 
    {
        $this->nom = $nom; 
        $this->ville = $ville;
        $this->capacite = $capacite;
        if ($equipeHabituelle != null) {
            if ($equipeHabituelle->getStade() != null){
                $equipeHabituelle->getStade()->setEquipeHabtituelle(null);
            }
            $equipeHabituelle->setStade($this);
            $this->equipeHabituelle = $equipeHabituelle;
        }
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getCapacite(): int
    {
        return $this->capacite;
    }

    public function getEquipeHabituelle(): ?Equipe
    {
        return $this->equipeHabituelle;
    }

    public function setEquipeHabtituelle(?Equipe $equipeHabtituelle): void
    {
        if($this->equipeHabituelle != $equipeHabtituelle) 
         {    
            if ($this->equipeHabituelle != null) 
                $this->equipeHabituelle->SetStade(null);
            $this->equipeHabituelle = $equipeHabtituelle;
            if($equipeHabtituelle != null) 
                $equipeHabtituelle->SetStade($this);
        }
    }

    public function donneTexte(): string 
    {
        return $this->nom ."". $this->ville .
        "". $this->capacite ."";
    }    
}

