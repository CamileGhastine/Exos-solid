<?php

class ManageNews
{
    private string $title;

    public function __construct(Log $log, string $title)
    {
        $this->title = $title;
        $log::addLog((new DateTime())->format('d-m-y m:m:s'));     
    }
}