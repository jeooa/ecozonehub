<?php

namespace App\Models;

use App\Core\Model;

class Administrator extends Model
{
    public function getByUsername(string $username): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM administrator WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC) ?: null;
    }
}
