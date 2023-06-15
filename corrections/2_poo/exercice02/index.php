<?php

require_once("CompteBancaire.php");

$monCompte = new CompteBancaire("Arthur");

$monCompte->versement(100);

$monCompte->afficher();

$monCompte->retrait(200);

$monCompte->afficher();

$monCompte->retrait(100);

$monCompte->afficher();

