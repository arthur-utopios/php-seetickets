<?php 

// Exercice 1

$tab = ['D', 'E', 'C', 'A', 'L', 'E'];

$lettre = $tab[0];

for ($cpt = 1; $cpt < count($tab); $cpt++) {
    $tab[$cpt -1] = $tab[$cpt];
}

$tab[count($tab) - 1] = $lettre;

print_r($tab);

$tabSlice = array_slice($tab, 1);

print_r($tabSlice);

$tabSlice[] = $lettre;

print_r($tabSlice);

// Exercice 2

$tab = [1, 2, 3];

echo "min: " ,min($tab), PHP_EOL;
echo "max: ", max($tab), PHP_EOL;
echo "moyenne: ", array_sum($tab) / count($tab), PHP_EOL;

// Exercice 3

$tab1 = [10, 12, 24];
$tab2 = [20, 13, 16];
$tab3 = [];

for ($cpt = 0; $cpt < count($tab1); $cpt++) {
    $tab3[] = $tab1[$cpt] + $tab2[$cpt];
}

print_r($tab3);

// Exercice 4

$pos = -1;
$posMax = -1;
$suite = false;
$cpt = 0;
$max = 0;

$tableau = [1, 0, 0, 0, 1, 0, 0, 0, 0, 1];

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

echo "Indice de la suite de 0 max: $posMax. Nb de 0: $max";