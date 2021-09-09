<?php

class SubmitField implements Fieldable
{
    public function __construct(private array $attributs = [])
    {
    }

    use GetInputTrait;
}
