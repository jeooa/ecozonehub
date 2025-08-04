<?php

namespace App\Models\Administrator\Login;

use App\Core\Model;

class Login extends Model
{
    public function getByUsername(string $username): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM administrator WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC) ?: null;
    }
}


