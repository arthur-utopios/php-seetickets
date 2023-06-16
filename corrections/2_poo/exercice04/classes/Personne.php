<?php

class Personne
{

    // Promotion du constructeur
    // https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private readonly string $prenom,
        private readonly string $nom,
        private readonly string $tel,
        public readonly string $email,
    )
    {
        echo __CLASS__;
    }

    public function __toString(): string
    {
        // Chaîne multi-lignes
        return <<<EOD
=== PERSONNE ===
Identité: $this->prenom $this->nom
email: $this->email
tel: $this->tel\n
EOD;

    }

}