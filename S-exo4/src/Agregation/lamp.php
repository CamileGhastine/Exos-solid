<?php

namespace Lamp\Agregation;

use Lamp\Agregation\Light;

class Lamp
{ 
    private Light $light;

    public function setLight(Light $light): void
    {
        $this->light = $light;
    }

    public function switch(): void
    {
        $this->light->setStatus(!$this->light->getStatus());
    }

    public function __toString(): string
    {
        if ($this->light->getStatus()) {
            return "on";
        }

        return "off";
    }
}
