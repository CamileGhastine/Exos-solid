<?php

class Log
{
    //l'utilisation du static permet d'utiliser la persistance et de ne pas avoir à utiliser de BDD ou de fichier.
    private static array $storage = [];
    private static int $count = 0;

    public static function addLog($date)
    {
        self::$storage[++self::$count] = $date;
    }

    public static function getstorage(): array
    {
        return self::$storage;
    }
}