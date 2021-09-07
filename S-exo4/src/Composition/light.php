<?php

namespace Lamp\Composition;

class Light
{
    private bool $status = false;

    /**
     * Get the value of status
     */ 
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus(): self
    {
       $this->status = ! $this->status;

       return $this;
    }
}
