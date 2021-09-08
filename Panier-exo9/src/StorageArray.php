<?php

class StorageArray implements Storable
{
    private $storage = [];

    function setValue(string $name, float $price): void
    {
        if(array_key_exists($name, $this->storage)) {
            $this->storage[$name] += $price; 
        }else {
            $this->storage[$name] = $price; 
        }
    }

    function reset(): void
    {
        $this->storage = [];
    }

    function total(): float
    {
        return array_sum($this->storage);
    }

    function restore(string $name): void
    {
        if(array_key_exists($name, $this->storage)) {
            unset($this->storage[$name]); 
        }
    }
}