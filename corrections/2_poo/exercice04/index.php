<?php

require_once "Autoloader.php";

Autoloader::load();

$personne = new Personne("Arthur", "Dennetiere", "0101010101", "a@d.fr");

echo $personne;

$travailleur = new Travailleur("Arthur", "Dennetiere", "0101010101", "a@d.fr", "1 rue de Tourcoing", "Utopios", "0102030405");

echo $travailleur;

$scientifique = new Scientifique("DUPONT", "Bernard", "b@d.fr", "0102030405", "a@b.fr", "SeeTickets", "0612241302", ["Mathématicien", "Joueur de Banjo"], ["Bg", "Timide"]);

echo $scientifique;