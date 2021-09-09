<?php

class Form
{
    private array $fields = [];

    public function __construct(private string $action = '')
    {
    }

    public function addField(Fieldable $field): self
    {
        $this->fields[] = $field->getField();

        return $this;
    }

    public function createForm(): string
    {
        $html = sprintf('<form action="%s" method="POST">', $this->action);
        foreach ($this->fields as $field) {
            $html .= sprintf('<p>%s</p>', $field);
        }
        $html .= '</form>';

        return $html;
    }
}
