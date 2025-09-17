<?php


include_once "./vendor/autoload.php";


use App\Humain;




$unHumain = new Humain("Doe", "John", new DateTime("2000-01-01"));
echo "texte : ".$unHumain->donneTexte();


$unHumain->setNom("Dupont");


echo "\ntexte : ".$unHumain->donneTexte();