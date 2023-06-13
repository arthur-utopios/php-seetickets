<?php

$tableau = [1, 2, 3];
$tableau1 = array(4, 5, 5); // ancienne syntaxe

$tableauAssociatif = [1 => "un", "deux" => 2, true => 24];

echo $tableau[1]; // 2

echo $tableauAssociatif[true]; // 24

$tableau[] = 4;

print_r($tableau);

$tableauAssociatif["toto"] = false;

echo count($tableauAssociatif);

// Destructuration de tableau
// Extrait une valeur dans le tableau
["USERNAME" => $user] = $_SERVER;

// skip les premiers éléments
[,,,$a] = $tableau;

echo $user;

echo $a;

// Spread opérateur
$tableau2 = [...$tableau, ...$tableau1];

print_r($tableau2);