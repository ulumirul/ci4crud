<?php

namespace App\Models;

use CodeIgniter\Model;

class useMole extends Model

{
    protected $table = 'toko';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['name', 'kelas', 'absen'];
}