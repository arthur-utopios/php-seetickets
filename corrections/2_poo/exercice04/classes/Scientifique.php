<?php

require_once "Travailleur.php";

class Scientifique extends Travailleur
{

    public function __construct(
        string $nom,
        string $prenom,
        string $email,
        string $tel,
        string $adresseEntreprise,
        string $entreprise,
        string $telPro,
        private readonly array $types,
        private readonly array $disciplines,
    )
    {
        parent::__construct($nom, $prenom, $email, $tel, $adresseEntreprise, $entreprise, $telPro);
        echo __CLASS__;
    }

    public function __toString(): string
    {
        return parent::__toString()
            . "=== SCIENTIFIQUE ===\n"
            . "Types: "
            . implode(", ", $this->types)
            . "\nDisciplines: "
            . implode(", ", $this->disciplines)
            . "\n";
    }
}