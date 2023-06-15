<?php

require_once("WaterTank.php");

$citerne1 = new WaterTank(50, 10, 10);
$citerne2 = new WaterTank(100, 20, 30);

$citerne1->remplir(100);
$citerne2->vider(10);

echo "Citerne 01: ", $citerne1->getVolume(), "L\n";
echo "Citerne 02: ", $citerne2->getVolume(), "L\n";

echo "Volume total des citernes: ", WaterTank::getVolumeTotal(), "L\n";

$citerne1->remplir(100);
$citerne2->vider(200);

echo "Citerne 01: ", $citerne1->getVolume(), "L\n";
echo "Citerne 02: ", $citerne2->getVolume(), "L\n";

echo "Volume total des citernes: ", WaterTank::getVolumeTotal(), "L\n";
