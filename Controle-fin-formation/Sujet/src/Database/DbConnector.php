<?php

namespace App\Database;

class DbConnector
{
    private Database $database;

    public function __construct(Database $database)
    {
        $this->setDatabase($database);
    }

    /**
     * Get the value of database
     */ 
    public function connect(): Database
    {
        return $this->database;
    }

    /**
     * Set the value of database
     *
     * @return  self
     */ 
    public function setDatabase(Database $database): self
    {
        $this->database = $database;

        return $this;
    }
}