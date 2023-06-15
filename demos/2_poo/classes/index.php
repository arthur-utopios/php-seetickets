<?php

require_once("Livre.php");
require_once("Dictionnaire.php");
require_once("Instrument.php");
require_once("Piano.php");
require_once("Violon.php");

$livre = new Livre("Jules Vernes", "Voyage au centre de la terre", 200);

//echo $livre->getAuteur(), PHP_EOL;
//echo $livre->getNombrePage(), PHP_EOL;

$livre->afficherInformations();

$dico = new Dictionnaire("Larousse", "Larousse Anglais 2023", "Anglais");

$dico->afficherInformations();

//$instrument = new Instrument(); // Erreur

$monPiano = new Piano("Pianiazzi", TypeInstrument::Corde);

$monViolon = new Violon("Violoni3000", TypeInstrument::Corde);

$monPiano->afficherInformation();
$monPiano->jouer();