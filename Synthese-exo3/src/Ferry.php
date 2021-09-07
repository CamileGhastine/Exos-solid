<?php

namespace Park;

class Ferry extends Vehicule
{
    private Parking $parking;
    private string $namePark;
    private string $place;
    protected static float $speed;

    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }



    public function __toString(): string
    {
        return "Ferry : {$this->getName()}";
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