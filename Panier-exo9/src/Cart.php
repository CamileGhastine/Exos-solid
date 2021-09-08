<?php

class Cart
{
    public function __construct(
        private Storable $storage,
        private float $tva = 0.2
    ) {
    }

    public function buy(Productable $product, int $quantity)
    {
        $this->storage->setValue($product->getName(), $quantity * $product->getPrice());

    }

    public function restore(Productable $product)
    {
        $this->storage->restore($product->getName());
    }

    public function total()
    {
       return  $this->storage->total();
    }
}
