<?php

namespace App\Models\Administrator\Login;

use App\Core\Model;

class Login extends Model
{
    public function getByUsername(string $username): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM tbl_users WHERE BINARY username = :username LIMIT 1");
        $stmt->execute([':username' => $username]);

        return $stmt->fetch(\PDO::FETCH_ASSOC) ?: null;
    }

}
