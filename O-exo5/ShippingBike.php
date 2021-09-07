<?php

class ShippingBike extends Shipping
{
    public function getCost(Order $order): float
    {
        return $order->getWeight() < 10 ? 10 : $order->getWeight();
    }
}
