<?php

class Chien
{
    // Définition des propriétés
    // visibilité type nomPropriété
    public string $nom;
    public int $age;
    private float $taille = 12.5;

    public static int $nombrePattes = 4;

    // Définition de méthodes
    // visibilité function méthode(): type de retour
    public function abboyer(): void
    {
        echo "woof woof\n";
    }

    public static function nombrePattes(): void
    {
        // self correspond à la classe dans laquelle on se situe
        echo "Les chiens ont " . self::$nombrePattes . " pattes\n";
    }

}

$rex = new Chien();
$medor = new Chien();

// Appel de la méthode abboyer de médor
$medor->abboyer();

// Accès aux propriétés de médor
$medor->nom = "Médor";
$medor->age = 3;
//$medor->taille; // Erreur

// Appel d'une méthode statique (liée à classe et non à un objet)
Chien::nombrePattes();