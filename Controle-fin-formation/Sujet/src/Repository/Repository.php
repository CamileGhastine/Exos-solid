<?php

namespace App\Repository;

use App\Database\Database;

class Repository
{
    public function __construct(private Database $database)
    {
        $this->setDatabase($database);
    }

    public function findAll(): array
    {
        return $this->database->getDatas();
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