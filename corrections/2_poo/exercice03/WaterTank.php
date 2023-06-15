<?php

class WaterTank
{
    private float $volumeMax;
    private float $volume;
    private float $poids;
    private static float $volumeTotal = 0;

    /**
     * @param float $volumeMax
     * @param float $volume
     * @param float $poids
     */
    public function __construct(float $volumeMax, float $volume, float $poids)
    {
        $this->volumeMax = $volumeMax;
        $this->volume = $volume;
        $this->poids = $poids;
        self::$volumeTotal += $volume;
    }

    public function remplir(float $eau): void
    {
        if ($this->volume + $eau > $this->volumeMax) {
            self::$volumeTotal += $this->volumeMax - $this->volume;
            $this->volume = $this->volumeMax;
        } else {
            $this->volume += $eau;
            self::$volumeTotal += $eau;
        }
    }

    public function vider(float $eau): void {
        if ($this->volume - $eau < 0) {
            self::$volumeTotal -= $this->volume;
            $this->volume = 0;
        } else {
            $this->volume -= $eau;
            self::$volumeTotal -= $eau;
        }
    }

    public function poidsCiterne(): float
    {
        return $this->poids + $this->volume;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @return float
     */
    public static function getVolumeTotal(): float
    {
        return self::$volumeTotal;
    }


}