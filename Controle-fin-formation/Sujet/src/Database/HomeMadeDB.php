<?php

namespace App\Database;

use App\Database\Database;

class HomeMadeDB implements Database
{
    /**
     * Get the value of storage
     */
    public function getDatas(): array
    {
        for ($i = 0; $i < 5; $i++) {
            $users[$i] = [
                'name' => "user" . $i + 1,
                'age' => rand(18, 99)
            ];
        }

        return $users;
    }
}
