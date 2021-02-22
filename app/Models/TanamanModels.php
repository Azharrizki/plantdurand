<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanModels extends Model
{
    protected $table = 'tanaman';
    protected $allowedFields = ['jenis', 'nama', 'slug', 'penulis', 'sampul', 'spoiler', 'deskripsi', 'link'];

    public function getTanaman($id = false)
    {
        if ($id == false) {
            # code...
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function getDetail($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('tanaman')->like('nama', $keyword);
    }

    public function jenisBunga($bunga)
    {
        $bunga = ['bunga'];
        return $this->table('tanaman')->whereIn('jenis', $bunga);
    }

    public function jenisDaun($daun)
    {
        $daun = ['tanaman'];
        return $this->table('tanaman')->whereIn('jenis', $daun);
    }
}
