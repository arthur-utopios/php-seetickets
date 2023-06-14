<?php

// Exercice 2

$chapitre = (int) readline("Saisir un nombre de chapitres: ");
$sousPartie = (int) readline("Saisir un nombre de sous-parties: ");

for ($cpt = 1; $cpt < $chapitre + 1; $cpt++) {

    echo "Chapitre $cpt\n";

    for ($cpt1 = 1; $cpt1 < $sousPartie + 1; $cpt1++) {
        echo "\tSous-partie $cpt.$cpt1\n";
    }
}

// Exercice 3

for ($table = 1; $table < 11; $table++) {
    echo "Table de $table\n";
    for($multiple = 1; $multiple < 11; $multiple++) {
        echo "$table x $multiple = ", $table * $multiple, PHP_EOL;
    }
}

// Exercice 4

$taux = 0.89 / 100;
$population = 96_809;
$annee = 2015;

while ($population <= 120_000) {
    // population = population * (1 + taux);
    $population *= 1 + $taux;
    $annee++;
}

echo "La population de Tourcoing atteindra ",  ceil($population), " habitants en $annee\n";

// Exercice 5

$nombre = (int) readline("Saisir un nombre: ");

// On itère jusqu'à la moitié du nombre pour optimiser la boucle
for ($cpt = 1; $cpt < ($nombre / 2) + 1; $cpt++) {

    $sum = 0;
    $res = "$nombre = ";

    // On itère de la moitié du nombre + 1
    // la boucle démarre toujours à partir de la boucle précédente
    for($cpt1 = $cpt; $cpt < ($nombre / 2) +2; $cpt1++) {

        // On fait la somme des nombres
        $sum += $cpt1;
        // On prépare l'affichage du résultat
        $res .= $cpt1 === $cpt ? "$cpt1 " : "+ $cpt1 ";

        // Si on atteint la valeur du nombre, on affiche le résultat
        if ($sum === $nombre) {
            echo $res, PHP_EOL;
            break;
        }

        // Pour optimiser la boucle, on break pour passer les itérations inutiles
        if ($sum > $nombre) {
            break;
        }
    }
}

// Exercice 6

$min = 0;
$max = 0;
$sum = 0;

$notes = (int) readline("Saisir un nombre de notes: ");

for ($cpt = 1; $cpt <= $notes; $cpt++) {

    $note = 0;

    do {
        $note = (int) readline("Saisir note $cpt: ");
    } while ($note < 0 || $note > 20);


    // La première note est FORCÉMENT la note max et la note min
    if ($cpt === 1) {
        $min = $note;
        $max = $note;
    }

    if ($note < $min) {
        $min = $note;
    }

    if ($note > $max) {
        $max = $note;
    }

    $sum += $note;
}

echo "La note max est de: $max\n";
echo "La note min est de: $min\n";
echo "La moyenne: ", round($sum / $notes, 1), PHP_EOL;

// Exercice 7

$estPremier = true;
$nombre = (int) readline("Saisir un nombre: ");

for($cpt = 2; $cpt < $nombre; $cpt++) {
    if ($nombre % $cpt === 0) {
        $estPremier = false;
        break;
    }
}

echo $estPremier ? "$nombre est premier" : "$nombre n'est pas premier\n";