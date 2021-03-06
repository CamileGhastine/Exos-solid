<?php

namespace Park;

abstract class Vehicule
{
    private string $status;
    private string $name;
    private string $engine;

    // on expose la variable $speed aux classes filles (ou classes dérivées)
    protected static float $speed;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    abstract function speed(): float;

    abstract function __toString(): string;

    abstract static public function setSpeed(float $speed): void;

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Set the value of engine
     *
     * @return  self
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }
}
