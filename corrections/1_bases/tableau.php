<?php 

// Exercice 4

$pos = -1;
$posMax = -1;
$suite = false;
$cpt = 0;
$max = 0;

$tableau = [2, 3, 4, 5, 1];

foreach($tableau as $key => $value) {

    // l'indice est égal à 0
    if ($value === 0) {

        $cpt++;

        // Début d'une suite
        if($suite === false) {
            $pos = $key;
            $suite = true;
        }

    } else {

        // On est plus dans une suite de zéro
        $suite = false;

        // On regarde si le compteur de 0 est supérieur au max
        if ($cpt > $max) {
            $max = $cpt;
            $posMax = $pos;
        }

        // Réinitialisation du compteur pour la prochaine suite
        $cpt = 0;
    }
}

echo $posMax, $max;