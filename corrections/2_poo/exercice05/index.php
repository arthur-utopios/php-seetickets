<?php

require_once "classes/Carre.php";
require_once "classes/Cercle.php";
require_once "classes/Math.php";

use classes\Carre;
use classes\Cercle;
use classes\Math;

$monCarre = new Carre(12);

$monCercle = new Cercle(5);

echo "Aire cercle: ", $monCercle->getAire(), PHP_EOL;
echo "Perimètre cercle: ", $monCercle->getPerimetre(), PHP_EOL;

echo "Aire carré: ", $monCarre->getAire(), PHP_EOL;
echo "Perimètre carré: ", $monCarre->getPerimetre(), PHP_EOL;

$math = new Math($monCarre);

$math->afficherAire();

$math2 = new Math($monCercle);

$math2->afficherAire();

//$math2->getVolume(); ERREUR
