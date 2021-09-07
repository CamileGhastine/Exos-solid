<?php

namespace Lamp\Composition;

use Lamp\Composition\Light;

class Lamp
{ 
    private Light $light;

    public function __construct(Light $light)
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
