<?php
require_once '../inc/functions.php';
require_once '../inc/config.php';
require_once '../classes/DBData.php';

$DBData = new DBData($config);

// Vos essais ici
// ...



/*
 * Tests
 * Pas touche !
 */
displayExo(3, $DBData->bestFrMovie()->title === 'Amélie');
