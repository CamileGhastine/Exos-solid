<?php

interface Productable
{
    public function getPrice(): float;
    public function setPrice(float $price): self;
    public function getName(): string;
}