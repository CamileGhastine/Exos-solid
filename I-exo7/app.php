<?php

spl_autoload_register(function ($class) {
    include __DIR__ .'/'.$class.'.php';
});

$products = [
    new Book('Moby Dick', 30, "isbn1234"),
    new Music('AC/DC', 17.5),
    new Bike('Brompton', 1430),
];

$cart = new Cart;

foreach($products as $product)
    $cart->buy($product, 5);

echo  $cart->total()  . "\n";