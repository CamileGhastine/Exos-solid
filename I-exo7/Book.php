<?php

class Book implements Productable
{
    public function __construct(
        private string $name,
        private float $price,
        private string $isbn
    ) {
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = round($price, Productable::PRECISION_DECIMAL);

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
}