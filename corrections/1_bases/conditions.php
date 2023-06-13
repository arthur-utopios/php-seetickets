<?php

// Exercice 2

$nombre = (int) readline("Saisir un nombre: ");

if ($nombre % 2 === 0) {
    echo "$nombre est pair\n";
} else {
    echo "$nombre est impair\n";
}

// Exercice 3

$nombre1 = (int) readline("Saisir nombre1: ");
$nombre2 = (int) readline("Saisir nombre2: ");
$nombre3 = (int) readline("Saisir nombre3: ");

$max = 0;

if ($nombre1 > $nombre2) {
    if ($nombre1 > $nombre3) {
        $max = $nombre1;
    } else {
        $max = $nombre3;
    }
} else {
    if ($nombre2 > $nombre3) {
        $max = $nombre2;
    } else {
        $max = $nombre3;
    }
}

echo "Le nombre maximum est: $max\n";

// Exercice 4

$char = strtolower(readline("Saisir un caractère: "));

$resultat = match ($char) {
    "a", "e", "i", "o", "u", "y" => "voyelle",
    default => "consonne",
};

echo "Le caractère est une $resultat\n";

// Exercice 5

$jourEntier = (int) readline("Saisir un jour de la semaine: ");

$jour = match ($jourEntier) {
    1 => "Lundi",
    2 => "Mardi",
    3 => "Mercredi",
    4 => "Jeudi",
    5 => "Vendredi",
    6 => "Samedi",
    7 => "Dimanche",
    default => "Erreur",
};

echo "$jour\n";

// Exercice 6

$mois = (int) readline("Saisir un mois: ");

$joursMois = match($mois) {
    2 => "28 ou 29",
    1, 3, 5, 7, 8, 10, 12 => "31",
    4, 6, 9, 11 => "30",
    default => "Erreur",
};

echo "$joursMois\n";

// Exercice 7

$annee = (int) readline("Saisir une année: ");

if (($annee % 4 === 0 && $annee % 100 !== 0) || ($annee % 400 === 0)) {
    echo "L'année $annee est bissextile\n";
} else {
    echo "L'année $annee n'est pas bissextile\n";
}

// Exercice 8

$saisie = readline("Saisir un caractère: ");

if (ctype_alpha($saisie)) {
    echo "$saisie est une lettre de l'alphabet\n";
} elseif(ctype_digit($saisie)) {
    echo "$saisie est un chiffre\n";
} else {
    echo "$saisie est un caractère spécial\n";
}

// Exercice 10

$age = (int) readline("Saisir un âge: ");
$salaire = (double) readline("Saisir un salaire: ");
$experience = (int) readline("Saisir expérience: ");

$message = "";

if ($age < 30) {
    $message .= "Vous êtes trop jeune\n";
}

if ($salaire > 40_000) {
    $message .= "Vous demandez trop d'argent\n";
}

if ($experience < 5) {
    $message .= "Vous manquez d'expérience\n";
}

if (empty($message)) {
    echo "Félicitations vous êtes embauché";
} else {
    echo $message;
}
