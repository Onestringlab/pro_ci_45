<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'data_siswa';
    protected $allowedFields = ['nis', 'nama', 'email', 'alamat'];
    protected $primaryKey = 'id';
}
