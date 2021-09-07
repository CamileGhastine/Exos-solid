<?php

namespace Lamp;

use Lamp\Light;

class Lamp
{
    public function switch()
    {
        Light::setStatus();
    }

    public function __toString()
    {
        if (Light::getStatus()) {
            return "on";
        }

        return "off";
    }
}
