<?php

namespace Park;

use Park\Vehicule;

final class Car extends Vehicule
{
    protected string $namePark;
    protected string $place;


    public function __toString(): string
    {
        return "Voiture : {$this->getName()}, parking : {$this->namePark}, place: {$this->place}";
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
}
