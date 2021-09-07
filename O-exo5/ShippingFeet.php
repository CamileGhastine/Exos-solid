<?php

class ShippingFeet extends Shipping
{
    public function getCost(Order $order): float
    {
        return $order->getWeight() < 10 ? 5 : $order->getWeight() / 2;
    }
}
