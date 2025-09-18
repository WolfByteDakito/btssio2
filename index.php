<?php

include_once "./vendor/autoload.php";

use App\Stade;
use App\Equipe;


$equipe = new Equipe("PSG", "France", null, null);


$stade = new Stade("Parc des Princes", "Paris", 48000, $equipe);


echo "Nom du stade de l'équipe : " . $equipe->getStade()->getNom() . PHP_EOL;
echo "Nom de l'équipe habituelle du stade : " . $stade->getEquipeHabituelle()->getNom() . PHP_EOL;



