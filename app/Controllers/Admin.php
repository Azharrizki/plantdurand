<?php

namespace App\Controllers;


use App\Models\TanamanModels;

class Admin extends BaseController
{
    protected $tanamanModel;
    public function __construct()
    {
        $this->tanamanModel = new TanamanModels();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->tanamanModel->search($keyword);
        }

        $data = [
            'tanaman' => $this->tanamanModel->getTanaman()
        ];

        return view('admin/admin', $data);
    }

    public function detail($slug)
    {
        $data = [
            'tanaman' => $this->tanamanModel->getDetail($slug)
        ];

        // jika tidak ada tanaman dalam tabel
        if (empty($data['tanaman'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('nama tanaman ' . $slug . ' tidak ditemukan');
        }

        return view('/admin/admin', $data);
    }

    // public function create()
    // {
    //     // session();
    //     $data =
    //         [
    //             'validation' => \Config\Services::validation()
    //         ];
    //     return view('/admin/create-tanaman', $data);
    // }

    // public function save()
    // {

    //     // validasai input
    //     if (!$this->validate([
    //         'nama' => [
    //             'rules' => 'required|is_unique[tanaman.nama]',
    //             'errors' => [
    //                 'required' => '{field} Nama harus diisi.',
    //                 'is_unique' => '{field} Nama sudah terdaftar'
    //             ]
    //         ],
    //         'sampul' => [
    //             'rules' => 'uploaded[sampul]|max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
    //             'errors' => [
    //                 'uploaded' => 'pilih gambar terlebih dahulu',
    //                 'max_size' => 'ukuran gambar terlalu besar',
    //                 'is_image' => 'file harus berupa gambar',
    //                 'mime_in' => 'file harus berupa gambar'
    //             ]
    //         ]
    //     ])) {
    //         // $validation = \Config\Services::validation();
    //         // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
    //         return redirect()->to('/tanaman/create')->withInput();
    //     }

    //     // ambil gambar
    //     $fileSampul = $this->request->getFile('sampul');

    //     // mengambil nama sampul
    //     $namaSampul = $fileSampul->getRandomName();

    //     // memindahkan file ke folder img
    //     $fileSampul->move('img', $namaSampul);


    //     $slug = url_title($this->request->getVar('nama'), '-', true);
    //     $this->tanamanModel->save(
    //         [
    //             'nama' => $this->request->getVar('nama'),
    //             'slug' => $slug,
    //             'penulis' => $this->request->getVar('penulis'),
    //             'jenis' => $this->request->getVar('jenis'),
    //             'sampul' => $namaSampul,
    //             'spoiler' => $this->request->getVar('spoiler'),
    //             'deskripsi' => $this->request->getVar('deskripsi'),
    //             'link' => $this->request->getVar('link')
    //         ]
    //     );

    //     session()->setFlashdata('pesan', 'data Berhasil ditambahkan.');

    //     return redirect()->to('/tanaman');
    // }

    public function delete($id)
    {
        $this->tanamanModel->delete($id);
        session()->setFlashdata('pesan', 'data Berhasil dihapus.');
        return redirect()->to('/admin');
    }
}
