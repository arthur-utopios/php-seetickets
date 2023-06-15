<?php

// Import du fichier Gateau.php
require_once("Gateau.php");

$gateauChocolat = new Gateau(
    "Gateau au chocolat",
    60,
    ["farine", "oeuf", "chocolat"],
    ["mélanger", "cuire", "manger"],
    "Arthur",
);

$gateauChocolat->afficherIngredients();
$gateauChocolat->afficherEtapes();

echo "";

$gateauChocolat->afficherRecette();