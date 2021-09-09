<?php

class PasswordField implements Fieldable
{
    public function __construct(private string $name, private array $attributs = [])
    {
    }

    use GetInputTrait;
}
