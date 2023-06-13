<?php

$prenom = readline("Saisir prénom: ");

// On utilise la boucle while quand on ne sait pas d'avance le nombre d'itération à effectuer
while ($prenom !== "Arthur") {
    echo "Erreur ! Mauvais prénom.\n";
    $prenom = readline("Saisir prénom: ");
}

// for (compteur; condition; pas)
for ($compteur = 0; $compteur < 10; $compteur++) {
    echo $compteur, PHP_EOL;
}

for ($compteur = 10; $compteur > 0; $compteur--) {
    echo $compteur, PHP_EOL;
}

do {
    $saisie = readline("Saisir une lettre: ");
} while($saisie !== "a");

$tableau = [10, 11, 12];

$tableau[0];

foreach ($tableau as $element) {
    echo $element, PHP_EOL;
}

for ($compteur = 0; $compteur < count($tableau); $compteur++) {
    echo $tableau[$compteur], PHP_EOL;
}

$tableauAssociatif = ["un" => 1, "deux" => 2];

$tableauAssociatif["un"];

// Parcourir un tableau associatif
foreach ($tableauAssociatif as $key => $value) {
    echo "$key => $value\n";
}