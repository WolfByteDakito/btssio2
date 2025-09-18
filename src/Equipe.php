<?php
namespace App;


use App\Selectionneur;
use ApP\Stade;


class Equipe
{
    private string $nom;
    private string $pays;
    private ?Selectionneur $selectionneur = null;

    private ?Stade $stadeHabituel = null;

    private array $joueurs;

    public function __construct(string $nom, string $pays, ?Selectionneur $selectionneur, ?Stade $stadeHabituel)
    {
        $this->nom = $nom;
        $this->pays = $pays;
        if ($selectionneur != null) {
            if ($selectionneur->getEquipe() != null) {
                $selectionneur->getEquipe()->setSelectionneur(null);
            }
            $selectionneur->setEquipe($this);
        }
        $this->joueurs = []; // Initialisation du tableau de joueurs
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

    public function getStade(): ?Stade
    {
        return $this->stadeHabituel;
    }

    public function setStade(?Stade $stadeHabituel): void
    {
        if ($this->stadeHabituel != $stadeHabituel) 
        {
            if ($this->stadeHabituel != null) {
                $this->stadeHabituel->setEquipeHabtituelle(null);
            }
            $this->stadeHabituel = $stadeHabituel;
            if ($stadeHabituel != null) {
                $stadeHabituel->setEquipeHabtituelle($this);
            }
        }

    }   
    
    //Pour avoir la liste des joueurs de l'équipe
    public function getJoueurs(): array
    {
        return $this->joueurs;
    }


    public function ajouterJoueur(Joueur $joueur): void
    {
        if (!in_array($joueur, $this->joueurs, true)) // Pour éviter les doublons
        {
            $this->joueurs[] = $joueur; // Pour ajouter un joueur à l'équipe
            $joueur->setEquipe($this); // Met à jour l'équipe du joueur
        }
    }


    public function retirerJoueur(Joueur $joueur): void
    {
        //Exemple de suppression d'un joueur de l'équipe car le php est compliqué pour la gestion des ensembles !
        $index = array_search($joueur, $this->joueurs, true);
        if ($index !== false) {
            unset($this->joueurs[$index]);
            $this->joueurs = array_values($this->joueurs); // Réindexer le tableau
        }
    }

    public function donneTexte(): string
    {
        $str = "";
        if ($this->selectionneur == null) {
            $str .= $this->nom . " " . $this->pays . " sans sélectionneur";
        } else {
            $str .= $this->nom . " " . $this->pays . " " . $this->selectionneur->getNom() . " " . $this->selectionneur->getPrenom();
        }
        if (count($this->joueurs) == 0) {
            $str .= "\n Aucun joueur dans l'équipe.";
            return $str;
        } else {
            $str .= "\n Joueurs :";


            foreach ($this->joueurs as $joueur) {
                $str .= "\n   " . $joueur->donneTexte();
            }
        }


        return $str;
    }
}


