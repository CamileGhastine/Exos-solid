<?php

class StorageSession implements Storable
{
    public function __construct()
    {
        session_start();
        $_SESSION["storage"] = [];       
    }

    function setValue(string $name, float $price): void
    {
        if(array_key_exists($name, $_SESSION["storage"])) {
            ($_SESSION["storage"])[$name] += $price; 
        } else {
            $_SESSION["storage"][$name] = $price; 
        }
    }

    function reset(): void
    {
        $_SESSION["storage"] = [];
    }

    function total(): float
    {
        return array_sum($_SESSION["storage"]);
    }

    function restore(string $name): void
    {
        if(array_key_exists($name, $_SESSION["storage"])) {
            unset($_SESSION["storage"][$name]); 
        }
    }
}