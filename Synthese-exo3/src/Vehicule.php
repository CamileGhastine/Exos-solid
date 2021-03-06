<?php

namespace Park;

use TypeError;

abstract class Vehicule
{
    protected string $status;
    protected string $name;
    protected string $engine;
    private array $types = ['petrol', 'electric'];

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    abstract public static function setSpeed(float $speed): void;

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
        if(in_array(strtolower($engine), $this->types)) {
            throw new TypeError("le moteur doit être au petrol ou electric");
        }

        $this->engine = $engine;

        return $this;
    }
}
