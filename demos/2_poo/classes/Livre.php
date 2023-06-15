<?php

require_once("Document.php");

// Pour hériter d'une classe on ajoute le mot clé extends
class Livre extends Document
{
    private int $nombrePage;

    /**
     * @param int $nombrePage
     */
    public function __construct(string $auteur, string $titre, int $nombrePage)
    {
        // On appelle le constructeur du parent pour initialiser les propriétés
        parent::__construct($auteur, $titre);
        $this->nombrePage = $nombrePage;
    }

    /**
     * @return int
     */
    public function getNombrePage(): int
    {
        return $this->nombrePage;
    }

    /**
     * @param int $nombrePage
     */
    public function setNombrePage(int $nombrePage): void
    {
        $this->nombrePage = $nombrePage;
    }

    public function afficherInformations(): void
    {
        parent::afficherInformations();
        echo "Nombre de pages: $this->nombrePage\n";
    }


}