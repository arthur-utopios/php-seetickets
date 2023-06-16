<?php

require_once "DivisionParZero.php";

/**
 * @throws Exception
 */
function inverse(int $nombre): float {

    if ($nombre === 0) {
        throw new DivisionParZero("Division par 0");
    }

    return 1 / $nombre;
}

try {
    echo inverse(3), PHP_EOL;
} catch (Exception $e) {
}

// On tente d'exécuter le code qui peut lever une exception
try {
    echo inverse(0);
} catch (DivisionParZero $e) {
    // On exécute un traitement en cas de capture d'une exception
    echo $e->getLine(), $e->getMessage();
} catch (Exception $e) {
echo "Exception inconnue";
} finally {
    // Ce blog de code s'exécute dans tous les cas
    echo "Fin du bloc try catch";
}
