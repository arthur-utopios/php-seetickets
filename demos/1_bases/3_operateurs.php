<?php

// Opérateurs arithmétiques

echo 1 - 1, PHP_EOL;
echo 1 + 1, PHP_EOL;
echo 1 / 1, PHP_EOL;
echo 1 * 1, PHP_EOL;
echo 1 ** 1, PHP_EOL;
echo 4 % 2, PHP_EOL; // Reste de la division euclidienne

$monEntier = 1;
$monEntier += 1; // $monEntier = $monEntier + 1;
$monEntier -= 1;
$monEntier *= 1;
$monEntier /= 1;

$maChaine = "hello";
$maChaine .= " world!";
echo $maChaine, PHP_EOL;

// Opérateurs de comparaisons
var_export(1 == "1");

echo PHP_EOL;

var_export(1 === "1");

echo PHP_EOL;

var_export(1 > 2);

echo PHP_EOL;

var_export(1 >=2);

echo PHP_EOL;

var_export("1" != 1); // Vérifie la valeur

echo PHP_EOL;

var_export("1" !== 1); // Vérification de la valeur ET du type

echo PHP_EOL;

// opérateur d'incrément

$compteur = 0;

$compteur++; // Incrémente la valeur de 1
$compteur--; // Décrémente la valeur de 1

++$compteur;
--$compteur;

// OU logique
$resultat = true || false; // true

var_export($resultat);

echo PHP_EOL;

// ET logique

$resultat = false && true; // false

var_export($resultat);

echo PHP_EOL;

$resultat = !true; // false

var_export($resultat);

echo PHP_EOL;