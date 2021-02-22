<?php

namespace App\Controllers;


use App\Models\GaleriModels;

class Galeri extends BaseController
{

    protected $galeriModel;
    public function __construct()
    {
        $this->galeriModel = new GaleriModels();
    }

    public function index()
    {
        $data = [
            'galeri' => $this->galeriModel->getSampul()
        ];

        return view('plantduran/galeri', $data);
    }

    public function detail($nama)
    {
        $data = [
            'galeri' => $this->galeriModel->getDetail($nama)
        ];

        // jika tidak ada galeri dalam tabel
        if (empty($data['galeri'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('nama galeri ' . $nama . ' tidak ditemukan');
        }

        return view('/plantduran/galeri', $data);
    }

    public function create()
    {
        // session();
        $data =
            [
                'validation' => \Config\Services::validation()
            ];
        return view('/plantduran/galeri', $data);
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

        // ambil gambar
        $fileSampul = $this->request->getFile('sampul');

        // mengambil nama sampul
        $namaSampul = $fileSampul->getRandomName();

        // memindahkan file ke folder img
        $fileSampul->move('img', $namaSampul);


        $this->galeriModel->save(
            [
                'nama' => $this->request->getVar('nama'),
                'penulis' => $this->request->getVar('penulis'),
                'sampul' => $namaSampul,
            ]
        );

        session()->setFlashdata('pesan', 'data Berhasil ditambahkan.');

        return redirect()->to('/galeri');
    }
}
