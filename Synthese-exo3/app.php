<?php

require __DIR__ . "/vendor/autoload.php";

use Park\{Car, Plane, Byke, Parking, Ferry};

try {
    Car::setSpeed(180);
    Plane::setSpeed(890.5);

    $brompton = new Byke('brompton');
    $kia = new Car('kia');
    $airbus = new Plane('airbus 320');
    $parking = new Parking();

    $parking->addPark($brompton);
    $parking->addPark($kia);
    $parking->addPark($airbus); // exception

} catch (Error $e) {
    echo $e->getMessage();
}

$ferry = new Ferry($parking);

$telsa = new Car('tesla');
$parking->addPark($telsa);
echo $parking . "\n";
