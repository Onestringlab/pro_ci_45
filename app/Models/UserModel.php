<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'role'];
    protected $primaryKey = 'id';

    public function getUser($username)
    {
        return $this->asArray()
            ->where(['username' => $username])
            ->first();
    }
}
