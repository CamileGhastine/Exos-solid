<?php

require (__DIR__ . "/vendor/autoload.php");

use Lamp\Agregation\Lamp;
use Lamp\Agregation\Light;

$light = new Light;
$lamp = new Lamp();
$lamp->setLight($light);

echo $lamp; // Off
$lamp->switch();
echo PHP_EOL;
echo $lamp; // On