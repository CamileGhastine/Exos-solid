<?php

Interface Productable
{
    function getPrice(): float;
    function setPrice(float $price): self;
    function getName(): string;
}