<?php

class Chat
{
    public string $name;
    public int $age;

    // Constructeur, méthode appelée lors de la création d'un objet
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function miauler(): void
    {
        var_dump($this);
    }
}

$felix = new Chat("Félix", 7);
$garfield = new Chat("Garfield", 10);
$felix->miauler();
$garfield->miauler();