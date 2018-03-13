<?php
require_once '../inc/functions.php';

require_once '../inc/config.php';
require_once '../classes/DBData.php';

$DBData = new DBData($config);

// Vos essais ici
// ...



/*
 * Tests
 * Do not touch.
 */
$movie = $DBData->getFilmById(40963);
displayExo(2, (
    // Object?
    is_object($movie)
));
