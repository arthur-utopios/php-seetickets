<?php

use exercice06\UserManager;

require_once "UserManager.php";

$user = ['password' => 'TaBlEauSeCRETX@29'];

$userManager = new UserManager();

try {
    $userManager->createUser($user);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage(), PHP_EOL;
} catch (Exception $e) {
    echo $e;
}
