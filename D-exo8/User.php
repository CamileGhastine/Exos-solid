<?php

class user
{
    private string $name;
    
    public function __construct(
        private SplobjectStorage $storage,
    ) {
    }

    public function setInterest(Interest $interest): self
    {
        $this->storage->attach($interest);

        return $this;
    }

    public function getInterests(): void
    {
        foreach($this->storage as $interest) {
            echo $interest->getName() . PHP_EOL;
        }
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
