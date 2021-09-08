<?php

interface Productable
{
    const PRECISION_DECIMAL = 2;

    public function getPrice(): float;
    public function setPrice(float $price): self;
    public function getName(): string;
}