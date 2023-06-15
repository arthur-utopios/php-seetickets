<?php

require_once("Document.php");

class Dictionnaire extends Document
{
    private string $langue;

    /**
     * @param string $langue
     */
    public function __construct(string $auteur, string $titre, string $langue)
    {
        parent::__construct($auteur, $titre);
        $this->langue = $langue;
    }

    public function afficherInformations(): void
    {
        parent::afficherInformations();
        echo "Langue: $this->langue";
    }

}