<?php

require __DIR__ . '/vendor/autoload.php';

use Park\{Car, Plane};

// détermine la vitesse 
Car::setSpeed(180);

// $name 
$kia = new Car('Kia');
$kia->setEngine('electric');

$kia->park('Place de la liberté', 'place : 56A');
$kia->setStatus('stop');
// méthode magique permettant d'afficher les informations
echo  $kia . "\n";
echo $kia->speed().PHP_EOL;
// Name: Kia, Engine: electric, Status: stop, Park address: Place du chateau place: 56A

// Plane
Plane::setSpeed(890);

// $name 
$plane = new Plane('Airbus A320');
$plane->setEngine('petrol');
$plane->setStatus('flight');

echo $plane . "\n";
echo $plane->speed().PHP_EOL;
echo "attention problème de conception car speed de kia a été changée à : " . $kia->speed().PHP_EOL;
