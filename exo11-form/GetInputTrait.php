<?php

trait GetInputTrait
{
    public function getField(): string
    {
        extract($this->attributs);

        $name = isset($this->name) ? ' name="' . $this->name . '"' : null;
        $id = isset($id) ? ' id="' . $id . '"' : null;
        $class = isset($class) ? ' class="' . $class . '"' : null;
        $value = isset($value) ? ' value="' . $value . '"' : null;
        $required = isset($required) ? ' required' : null;
        $label = isset($this->name) ? '<label for="' . $this->name . '">' . $this->name . ': </label>' : null;

        return $label . '<input type="' . substr(__CLASS__, 0, -5).'"' . $name . $id . $class . $value . $required . '>';
    }
}
