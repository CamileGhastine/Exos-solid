<?php

require (__DIR__ . "/vendor/autoload.php");

use Lamp\Composition\Lamp;
use Lamp\Composition\Light;

$light = new Light;
$lamp = new Lamp($light);

echo $lamp; // Off
$lamp->switch();
echo PHP_EOL;
echo $lamp; // On