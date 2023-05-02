<?php

namespace App\Models;

use CodeIgniter\Model;

class useMole1 extends Model
{
    protected $table = 'percobaan';
    protected $allowedFields = ['nama', 'alamat', 'no_hp'];

    public function GetKomik($id = false)
    {
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}