<?php

namespace App\Core;

use App\Models\Database\Database;

class Model
{
    protected \PDO $db;

    public function __construct()
    {
        // Use the Singleton instance of Database
        $this->db = Database::getInstance()->getConnection();
    }
}
