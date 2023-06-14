<?php

const LETTRES = ["R", "Z", "S", "X", "W", "T"];

function genererNom(array $lettres): string {

    $nomRobot = "";

    // Génération des 3 premiers caractères
    for($i = 0; $i < 3; $i++) {
        // Sélectionne un caractère aléatoire dans le tableau
        $nomRobot .= $lettres[rand(0, count($lettres) - 1)];
    }

    // Nombre aléatoire entre 0 et 9999
    $nombre = rand(0, 9999);

    // Ajoute des 0 en préfixe si le nombre est inférieur à 1000
    $nombreVersChaine = sprintf("%04d", $nombre);

    return "$nomRobot-$nombreVersChaine";
}

echo genererNom(LETTRES);