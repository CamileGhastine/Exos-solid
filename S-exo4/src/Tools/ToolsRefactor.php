<?php

class Redirecter
{
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}

class Formater
{
    private $format = 'd/m/y';

    public function date($date)
    {
        return Date($this->format, $date);
    }
}

class Generater
{
    private $max = 10;

    public function token()
    {
        return random_bytes($this->max);
    }
}

