<?php

require_once 'Instrument.php';

class Piano extends Instrument
{

    public function jouer(): void
    {
        echo "Je joue du piano";
    }
}