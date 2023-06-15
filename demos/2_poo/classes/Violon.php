<?php

require_once("Instrument.php");

class Violon extends Instrument
{

    public function jouer(): void
    {
        echo "Je joue du violon\n";
    }
}