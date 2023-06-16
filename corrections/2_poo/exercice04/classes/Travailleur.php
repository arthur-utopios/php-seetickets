<?php

require_once "Personne.php";

class Travailleur extends Personne
{

    public function __construct(
        string                  $nom,
        string                  $prenom,
        string                  $email,
        string                  $tel,
        private readonly string $adresseEntreprise,
        private readonly string $entreprise,
        private readonly string $telPro
    )
    {
        parent::__construct($prenom, $nom, $tel, $email);
        echo __CLASS__;
    }

    public function __toString(): string
    {
        return parent::__toString() . <<<EOD
=== TRAVAILLEUR ===
Entreprise: $this->entreprise
Adresse: $this->adresseEntreprise
Tel pro: $this->telPro\n
EOD;
    }
}