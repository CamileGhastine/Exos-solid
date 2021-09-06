<?php

class Log
{
    private static array $storage = [];
    private static int $count = 0;

    public function __construct()
    {
        $this->addLog();
    }

    public static function addLog()
    {
        self::$count= self::$count + 1;
        self::$storage[self::$count] = new DateTime();
    }

    public static function getstorage(): array
    {
        return self::$storage;
    }
}