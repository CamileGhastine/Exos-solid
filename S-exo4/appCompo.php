<?php

require (__DIR__ . "/vendor/autoload.php");

use Lamp\Lamp;
use Lamp\Light;

$light = new Light;
$lamp = new Lamp();

echo $lamp; // Off
$lamp->switch();
echo PHP_EOL;
echo $lamp; // On