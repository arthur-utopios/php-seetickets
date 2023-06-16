<?php

namespace classes;

use interfaces\Forme;
require_once (__DIR__ . "/../interfaces/Forme.php");

class Math
{
    public Forme $forme;

    /**
     * @param Forme $forme;
     */
    public function __construct(Forme $forme)
    {
        $this->forme = $forme;
    }

    public function afficherAire(): void {
        echo "Aire: ", $this->forme->getAire(), PHP_EOL;
    }

}