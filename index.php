<?php


include_once "./vendor/autoload.php";


use App\Remplacement;
use App\Evenement;
use App\Joueur;
use App\Equipe;

$equipe1 = new Equipe("PSG", "France", null, null);

$joueur1 = new Joueur("Pussy", "Sacha", new DateTime("2004-03-20"), 20, $equipe1);
$joueur2 = new Joueur("Bouvresse", "Lohann", new DateTime("2006-02-06"), 15, $equipe1);

$remplacement1 = new Remplacement(new DateTime("10:15"), "Remplacement", $joueur1, $joueur2);

