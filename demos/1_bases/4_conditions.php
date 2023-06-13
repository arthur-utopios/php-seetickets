<?php

$age = 18;

if ($age >= 18) {
    echo "Vous êtes majeur\n";
}

if (pi() > 4) {
    echo "Pi est supérieur à 4\n";
} else {
    echo "Pi est inférieur à 4\n";
}

$random = rand(1, 100);

if($random < 10) {
    echo "le nombre $random est un chiffre";
} elseif ($random <= 80) {
    echo "le nombre $random est entre 10 et 80";
} else {
    echo "le nombre $random est entre 80 et 100";
}

$codeHttp = 200;

$message = "";

switch ($codeHttp) {
    case 200:
    case 300:
        $message = "ok";
        break;
    case 400:
        $message = "Not Found";
        break;
    case 500:
        $message = "Erreur de server";
        break;
    default:
        $message = "Code inconnu";
}

$message = match ($codeHttp) {
    200, 300 => "ok",
    400 => "Not Found",
    500 => "Erreur de server",
    default => "Code inconnu",
};