<?php

namespace App\Controllers;

use App\Models\KomentarModels;

class Komentar extends BaseController
{
    protected $komentarModel;
    public function __construct()
    {
        $this->komentarModel = new KomentarModels();
    }
    public function index()
    {
        return view('/plantduran/tanaman');
    }

    public function create()
    {
        // session();
        $data =
            [
                'validation' => \Config\Services::validation()
            ];
        return view('/plantduran/detail', $data);
    }

    public function save()
    {

        // validasai input
        // if (!$this->validate([
        //     'nama' => [
        //         'rules' => 'required|is_unique[galeri.nama]',
        //         'errors' => [
        //             'required' => '{field} Nama harus diisi.',
        //             'is_unique' => '{field} Nama sudah terdaftar'
        //         ]
        //     ],
        //     'sampul' => [
        //         'rules' => 'uploaded[sampul]|max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             'uploaded' => 'pilih gambar terlebih dahulu',
        //             'max_size' => 'ukuran gambar terlalu besar',
        //             'is_image' => 'file harus berupa gambar',
        //             'mime_in' => 'file harus berupa gambar'
        //         ]
        //     ]
        // ])) {
        //     // $validation = \Config\Services::validation();
        //     // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
        //     return redirect()->to('/plantduran/galeri')->withInput();
        // }




        $this->komentarModel->save(
            [
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'komentar' => $this->request->getVar('komentar'),
            ]
        );

        session()->setFlashdata('pesan', 'data Berhasil ditambahkan.');

        return redirect()->to('/tanaman');
    }
}
