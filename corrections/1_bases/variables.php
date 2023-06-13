<?php

// Exercice 1

$prenom = readline("Saisir un prénom: ");
$nom = readline("Saisir un nom: ");

echo "Bonjour $prenom $nom !";

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

echo "La somme des carrés de $c et $d est de: ", $c ** 2 + $d ** 2;