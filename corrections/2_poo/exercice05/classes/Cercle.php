<?php

namespace classes;

use interfaces\Forme;

require_once (__DIR__ . "/../interfaces/Forme.php");

class Cercle implements Forme
{

    public function __construct(private readonly float $rayon)
    {
    }

    public function getPerimetre(): float
    {
        return 2 * pi() * $this->rayon;
    }

    public function getAire(): float
    {
        return 2 * pi() * $this->rayon**2;
    }

    public function getVolume(): float {
        return 0;
}
}