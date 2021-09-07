<?php

class Order
{
    private Shipping $shipping;
    protected float $weight;

    public function __construct(Shipping $s, float $weight)
    {
        $this->shipping = $s;
        $this->weight = $weight;
    }

    public function cost(): float
    {
        return $this->shipping->getCost($this);
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight(): float
    {
        return $this->weight;
    }
}
