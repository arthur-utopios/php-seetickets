<?php

class Voiture
{
    private string $marque;
    private float $reservoir;
    private float $prix;

    // Propriété statique, propre à la classe
    private static int $nombreVoiture = 0;

    // ALT + Insert => Constructor => Sélectionner les propriétés puis entrée

    /**
     * @param string $marque
     * @param float $resevoir
     * @param float $prix
     */
    public function __construct(string $marque, float $resevoir, float $prix)
    {
        // Incrémente le nombre de voiture instancié
        self::$nombreVoiture++;
        $this->marque = $marque;
        $this->reservoir = $resevoir;
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public static function getNombreVoiture(): int
    {
        return self::$nombreVoiture;
    }

    public function __destruct()
    {
        self::$nombreVoiture--;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @return float
     */
    public function getReservoir(): float
    {
        return $this->reservoir;
    }

    /**
     * @param float $reservoir
     */
    public function setReservoir(float $reservoir): void
    {
        $this->reservoir = max($reservoir, 0);
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }


}

$renault = new Voiture("Renault", 12.5, 10000);

echo $renault->getMarque(), PHP_EOL;

echo $renault->getReservoir(), PHP_EOL;

$renault->setReservoir(-12.2);

echo $renault->getReservoir(), PHP_EOL;

echo "Nombre de voiture instanciées: ", Voiture::getNombreVoiture(), PHP_EOL;

$peugeot = new Voiture("Peugeot", 40, 5000);

echo "Nombre de voiture instanciées : ", Voiture::getNombreVoiture(), PHP_EOL;

// Il appelle le destructeur
$peugeot = null;

echo "Nombre de voiture instanciées : ", Voiture::getNombreVoiture(), PHP_EOL;

