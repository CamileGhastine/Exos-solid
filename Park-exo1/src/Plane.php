<?php

namespace Park;

use Park\Vehicule;

final class Plane extends Vehicule
{
    protected string $category;


    public function __toString(): string
    {
        return "avion : {$this->getName()}, moteur : {$this->getEngine()}, place: {$this->getStatus()}";
    }
        

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory(string $category)
    {
        $this->category = $category;

        return $this;
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
