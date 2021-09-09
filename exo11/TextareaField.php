<?php

class TextareaField implements Fieldable
{
    public function __construct(private string $name, private array $attributs = [])
    {
    }

    public function getField(): string
    {
        extract($this->attributs);

        $id = isset($id) ? ' id="' . $id . '"' : null;
        $class = isset($class) ? ' class="' . $class . '"' : null;
        $required = isset($required) ? ' required' : null;
        $value = $value ?? null; 

        return '<textarea name="' . $this->name . '"' . $id . $class . $required . '>'.$value.'<' . $type . '>';
    }
}
