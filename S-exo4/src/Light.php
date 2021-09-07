<?php

namespace Lamp;

class Light
{
    private static bool $status = false;

    /**
     * Get the value of status
     */ 
    public static function getStatus()
    {
        return self::$status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public static function setStatus()
    {
       self::$status = ! self::$status;

    }
}
