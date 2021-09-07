<?php

class ShippingBike extends Shipping
{
    private float $cost;

    public function getCost(Order $order): float
    {
        return $order->getWeight() < 10 ? 10 : $order->getWeight();
    }
}
