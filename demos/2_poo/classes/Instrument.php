<?php

// Enumeration
enum TypeInstrument: string
{
    case Vent = "Vent";
    case Cuivre = "Cuivre";
    case Corde = "Corde";
    case Percussion = "Percussion";
}

// Classe abstraite: non instanciable
abstract class Instrument
{
    private int $id;
    protected string $nom;
    protected TypeInstrument $type;

    private static int $compteur = 0;

    /**
     * @param int $id
     * @param string $nom
     * @param TypeInstrument $type
     */
    public function __construct(string $nom, TypeInstrument $type)
    {
        $this->id = ++self::$compteur;
        $this->nom = $nom;
        $this->type = $type;
    }

    // Méthode abstraite doit être redéfinie dans les enfants
    public abstract function jouer(): void;


    // Méthode qui pourra être utilisée par les classes dérivées
    public function afficherInformation(): void {
        echo "$this->id\n";
        echo "$this->nom\n";
        echo sprintf("%s\n", $this->type->value);
    }

}