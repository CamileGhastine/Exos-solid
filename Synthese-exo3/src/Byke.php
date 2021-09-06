<?php

namespace Park;

use Park\Parkable;

class Byke extends Vehicule implements Parkable
{
    private string $namePark;
    private string $place;


    public function __toString(): string
    {
        return "Vélo : {$this->getName()}, parking : {$this->namePark}, place: {$this->place}";
    }

    public function park(string $name, string $place): void
    {
        $this->namePark = $name;
        $this->place = $place;
    }

    public function speed(): float
    {
        return self::$speed;
    }

    public static function setSpeed(float $speed): void
    {
        self::$speed = $speed;
    }

    public function pay(float $price)
    {
    }

}