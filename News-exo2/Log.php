<?php

class Log
{
    private static array $storage = [];
    private static int $count = 0;

    public static function addLog()
    {
        self::$count= self::$count + 1;
        $date = new DateTime();
        self::$storage[self::$count] = (new DateTime())->format('d-m-y m:m:s');
    }

    public static function getstorage(): array
    {
        return self::$storage;
    }
}