<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModels extends Model
{
    protected $table = 'komentar';
    protected $allowedFields = ['komentar', 'username', 'email'];

    public function getKomentar($id = false)
    {
        if ($id == false) {
            # code...
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
