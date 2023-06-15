<?php

class Document
{
    private string $auteur;
    protected string $titre;
    private DateTime $dateCreation;

    /**
     * @param string $auteur
     * @param string $titre
     */
    public function __construct(string $auteur, string $titre)
    {
        $this->auteur = $auteur;
        $this->titre = $titre;
        $this->dateCreation = new DateTime('now', new DateTimeZone('Europe/Paris'));
    }

    /**
     * @return string
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return DateTime
     */
    public function getDateCreation(): DateTime
    {
        return $this->dateCreation;
    }

    public function afficherInformations(): void
    {
        echo "$this->titre\n";
        echo "$this->auteur\n";
        echo $this->dateCreation->format("d-m-Y H:i:s"), PHP_EOL;
    }
    
}