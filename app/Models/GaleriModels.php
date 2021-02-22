<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModels extends Model
{
    protected $table = 'galeri';
    protected $allowedFields = ['nama', 'penulis', 'sampul'];

    public function getSampul($id = false)
    {
        if ($id == false) {
            # code...
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function getDetail($nama = false)
    {
        if ($nama == false) {
            return $this->findAll();
        }
        return $this->where(['nama' => $nama])->first();
    }
}
