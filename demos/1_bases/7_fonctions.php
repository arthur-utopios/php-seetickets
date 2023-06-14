<?php

function helloWorld(): void
{
    echo "Hello world\n";
}

var_dump(helloWorld());

function goodbyeWorld(): int
{
    return print "goodbye world!\n";
}

var_dump(goodbyeWorld());

function soustraire(int $a, int $b): int
{
    echo __FUNCTION__, PHP_EOL;
    return $a - $b;
}

echo soustraire(10, 5), PHP_EOL;

$a = 10;

// Passage du paramètre par référence : &
function parReference(int &$nombre): int
{
    $nombre+= 10;
    return $nombre;
}

echo "resultat: ", parReference($a), PHP_EOL;

echo $a;

// /!\ Il faut placer les paramètres par défaut après les paramètres obligatoires
function bonjourPrenom(string $prenom = "Arthur"): void {
    echo "Bonjour $prenom\n";
}

bonjourPrenom("toto");
bonjourPrenom();

function sayHelloToManyPeople(string ...$prenoms): void {
    $hello = "Bonjour: ";
    foreach($prenoms as $prenom) {
        $hello .= "$prenom ";
    }
    echo $hello, PHP_EOL;
}

sayHelloToManyPeople("Arthur", "Toto", "Banane");

$tab = [1, 2];

// Utilisation de l'opérateur spread pour unpack les valeurs dans une fonction
echo soustraire(...$tab), PHP_EOL;

// Passage d'argument nommé
echo soustraire(b: 10, a: 40), PHP_EOL;