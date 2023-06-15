<?php

class Gateau
{
    private string $name;
    private int $temps;
    private array $ingredients;
    private array $etapes;
    private string $createur;

    /**
     * @param string $name
     * @param int $temps
     * @param array $ingredients
     * @param array $etapes
     * @param string $createur
     */
    public function __construct(string $name, int $temps, array $ingredients, array $etapes, string $createur)
    {
        $this->name = $name;
        $this->temps = $temps;
        $this->ingredients = $ingredients;
        $this->etapes = $etapes;
        $this->createur = $createur;
    }

    public function afficherIngredients(): void
    {
        echo "== INGREDIENTS ==\n";
        foreach ($this->ingredients as $ingredient) {
            echo "- $ingredient\n";
        }
    }

    public function afficherEtapes(): void
    {
        echo "== ETAPES ==\n";

        foreach ($this->etapes as $index => $etape) {
            echo $index + 1 ,". $etape\n";
        }
    }

    public function afficherRecette(): void
    {
        echo "== RECETTE $this->name ==\n";
        echo "Temps de cuisson: $this->temps min \t Auteur: $this->createur\n";
        $this->afficherIngredients();
        $this->afficherEtapes();
    }

}