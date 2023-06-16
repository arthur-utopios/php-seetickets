<?php

// Commentaire sur une ligne (c)
# Commentaire sur une ligne (bash)

/*
 * Mon commentaire
 * multi-lignes
*/

// syntaxe à privilégier
echo "hello";

echo("world");

// Renvoie un entier = 1
print("!");

$variable = print("toto");

echo $variable; // 1

echo "\n";

echo "Retour à à la ligne";

echo PHP_EOL;

echo "Retour à la ligne PHP_EOL";

// Entier
$monEntier = 3;

// Nombre à virgule
$monFlottant = 12.3;

// Booléen
$monBooleen = true;

// Chaîne
$maChaine = "Hello world!";

// PHP est sensible à la casse $maChaine =/= $machaine
$machaine = "Hello";

// Echo concatène les chaînes passées en paramètres
echo PHP_EOL, $maChaine, $machaine, PHP_EOL;

// gettype retourne le type d'une variable
echo "Type de monBooleen: ", gettype($monBooleen), PHP_EOL;

// Readline permet de lire des informations depuis la console
// Elle prend en paramètre une chaîne de caractère à afficher
$prenom = readline("Saisir un prénom: ");

echo $prenom;

// Cast de variable
// https://www.php.net/manual/fr/language.types.type-juggling.php

// Permet de convertir une chaîne de caractère en entier
$age = (int)readline("Saisir un âge: ");

$age = (int)"40";

echo gettype($age);

// Chaîne de caractères

$pseudo = "darkarthur\n";

// Les chaînes en single quotes n'interprète par les caractères spéciaux
$motDePasse = 'secret\n';

// String interpolation
echo "pseudo: $pseudo mdp: $motDePasse\n";

// L'opérateur . permet de concaténer des chaînes
echo $prenom . ":" . $motDePasse . "secret";

// Constantes

// Les constantes ne peuvent pas être modifiées ou supprimées après affectation
const ESPACE = " ";

echo "Bonjour", ESPACE, $prenom;

// Syntaxe alternative pour définir une constante
define("IS_ACTIVE", true);

// Détruit une variable
unset($variable);

// Warning
echo $variable;

echo PHP_VERSION;

