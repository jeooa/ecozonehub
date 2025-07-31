<?php

namespace App\Core;

use PDO;
use PDOException;

class Model
{
    protected $db;

    public function __construct()
    {
        $host = $_ENV['DB_HOST'] ?? null;
        $dbname = $_ENV['DB_NAME'] ?? null;
        $user = $_ENV['DB_USER'] ?? null;
        $pass = $_ENV['DB_PASS'] ?? null;

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
        }
    }
}
