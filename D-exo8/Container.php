<?php

class Container
{
    public function __construct(private SplObjectStorage $storage)
    {
        $this->storage = new SplObjectStorage;
    }

    /**
     * Get the value of storage
     */
    public function getStorage(string $name)
    {
        $this->storage->rewind();
        while($this->storage->valid()) {
            if($name === $this->storage->getInfo()) {
                return $this->storage->current();
            }
            $this->storage->next();
        }        
    }

    /**
     * Set the value of storage
     *
     * @return  self
     */
    public function setStorage(Interest $interest, string $name): self
    {
        if($this->storage->contains($interest))  throw new InvalidArgumentException("This interest exists");
        
        $this->storage->attach($interest, $name);

        return $this;
    }
}
