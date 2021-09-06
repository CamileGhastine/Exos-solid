<?php

class ManageNews
{
    private string $title;

    public function __construct(Log $log, string $title)
    {
        $this->title = $title;
        $this->Log = $log;     
    }
}