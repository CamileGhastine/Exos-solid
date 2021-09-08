<?php

spl_autoload_register(function ($class) {
    include __DIR__ .'/'.$class.'.php';
});

$storage = new SplObjectStorage;
$alan = new User( $storage );

$python = new Interest('Python');
$alan->setInterest($python);

$php = new Interest('PHP');
$alan->setInterest($php);

$javascript = new Interest('Javascript');
$alan->setInterest($javascript);

echo "\n";
$alan->getInterests();
echo "\n";