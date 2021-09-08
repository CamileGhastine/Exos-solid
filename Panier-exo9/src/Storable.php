<?php

interface Storable
{
    function setValue(string $name, float $price): void;
    function reset(): void;
    function total(): float;
    function restore(string $name): void;

}