<?php

// Exercice 1

$prenom = readline("Saisir un prénom: ");
$nom = readline("Saisir un nom: ");

echo "Bonjour $prenom $nom !\n";

// Exercice 2

$a = (int) readline("Saisir a: ");
$b = (int) readline("Saisir b: ");

echo "a: $a, b: $b\n";

$temp = $a;

$a = $b;
$b = $temp;

echo "a: $a, b: $b\n";

// Destructuration de tableaux
[$a, $b] = [$b, $a];

// Exercice 3

$c = readline("Saisir c: ");
$d = readline("Saisir d: ");

echo "La somme des carrés de $c et $d est de: ", $c ** 2 + $d ** 2, PHP_EOL;

// Exercice 4

$age = (int) readline("Saisir un âge: ");

$estMajeur = $age >= 18;

echo "est majeur ? ";
var_export($estMajeur);
echo PHP_EOL;

// résultat = {condition} ? {valeurSiVrai} : {ValeurSiFaux};
$resultat = $age >= 18 ? "true" : "false";

// Exercice 5
$rayon = 4;
$hauteur = 7;
echo round(1/3 * pi() * $rayon**2 * $hauteur, 2), "cm3\n";

// Exercice 6

$chaine = readline("Saisir une phrase: ");

$miniscule = strtolower($chaine);
$tableau = str_split($miniscule); // transforme la chaine en tableau
$virgule = implode(",", $tableau); // Transforme le tableau en chaine séparée par une virgule
$capitale = ucwords($miniscule);

echo $miniscule, PHP_EOL;
echo $virgule, PHP_EOL;
echo $capitale, PHP_EOL;

// Exercice 7

$cote = 5;
echo "Perimètre: ", 4 * $cote, PHP_EOL;
echo "Aire: ", 5 ** 2, PHP_EOL;