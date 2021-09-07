<?php

class cart
{
    protected array $storage = [];

    public function buy(Productable $p, int $quantity)
    {
        $this->storage[] = ["p" => $p, "q" => $quantity];
    }

    public function total(): float
    {
        $total = 0;

        foreach ($this->storage as $product) {
            $total += $product["p"]->getPrice() * $product["q"];
        }
        
        return $total;
    }
}
