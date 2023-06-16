<?php

namespace classes;

use interfaces\Forme;

require_once (__DIR__ . "/../interfaces/Forme.php");

class Carre implements Forme
{


    public function __construct(private readonly float $cote)
    {
    }

    public function getPerimetre(): float
    {
        return $this->cote * 4;
    }

    public function getAire(): float
    {
        return $this->cote ** 2;
    }
}