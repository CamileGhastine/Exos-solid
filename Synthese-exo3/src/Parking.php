<?php

namespace Park;

use SplObjectStorage;
use Park\Car;
use Park\Byke;
use Error;
use Park\Parkable;

class Parking
{
    // Structure de données PHP plus optimisée pour mémoriser des objets que les tableaux
    private SplObjectStorage $storage;

    public function __construct()
    {
        $this->storage = new SplObjectStorage;
    }

    public function addPark(Parkable $vehicule): self
    {
        if (!$vehicule instanceof Car && !$vehicule instanceof Byke) {
            throw new Error("Ce vehicule ne peut être garé dans le parking" . PHP_EOL);
        }
        $this->storage->attach($vehicule);

        return $this;
    }

    public function removePark($vehicule): self
    {
        if (!$this->storage->contains($vehicule)) {
            throw new Error("Ce Vehicule n'est pas garé dans le parking." . PHP_EOL);
        }

        $this->storage->detach($vehicule);

        return $this;
    }

    public function count(): int
    {
        return $this->storage->count();
    }

    public function __toString()
    {
        $list = "";
        foreach ($this->getStorage() as $vehicule) {
            $list .= PHP_EOL . "- " . $vehicule->getName();
        }
        return 'Le parking contient ' . $this->count() . " véhicule". ($this->storage->count() > 1 ? "s" : "") ." :" . $list;
    }



    /**
     * Get the value of storage
     */
    public function getStorage()
    {
        return $this->storage;
    }
}
