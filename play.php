<?php

require_once __DIR__.'/lib/Ship.php';

/**
 * @param Ship $someShip
 */

function printShipSummary($someShip)
{
    echo 'star ship: '.$someShip->name;
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getName();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->weapon_power = 10;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weapon_power = 5;
$otherShip->strength = 50;

printShipSummary($myShip);
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';

if ($myShip->doesGivenShipHasMoreStrenght($otherShip)) {
    echo $otherShip->name.' is more powerful';
} else {
    echo $myShip->name.' is more powerful';
}

