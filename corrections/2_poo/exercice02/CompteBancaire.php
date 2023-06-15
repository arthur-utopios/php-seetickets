<?php

class CompteBancaire
{
    private int $id;
    private string $nom;
    private float $solde;

    private static int $nombreCompte = 0;

    /**
     * @param int $id
     * @param string $nom
     * @param float $solde
     */
    public function __construct(string $nom, float $solde = 0)
    {
        self::$nombreCompte++;
        $this->id = self::$nombreCompte;
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function versement(float $montant): void
    {
        $this->solde += abs($montant);
    }

    public function retrait(float $montant): void
    {
        $this->solde -= abs($montant);

        // Application des agios si le compte est en négatif
        if ($this->solde < 0) {
            $this->agios();
        }
    }

    private function agios(float $taux = 5): void
    {
        $this->solde -= abs($this->solde * $taux / 100);
    }

    public function afficher(): void
    {
        echo "== COMPTE N°$this->id ==\n";
        echo "SOLDE: $this->solde €\n";
        echo "PROPRIETAIRE: $this->nom\n";
    }
}