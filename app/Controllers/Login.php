<?php

namespace App\Controllers;

use App\Models\UserModels;

class Login extends BaseController
{
    public function index()
    {
        return view('/login/awal');
    }

    public function save()
    {
        $model = new UserModels();
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'user_nama' => $this->request->getPost('user_nama'),
            'user_email' => $this->request->getPost('user_email'),
            'user_password' => $this->request->getPost('user_password')
        ];
        $model->saveUser($data);
        session()->setFlashdata('berhasil', 'Selamat akun anda berhasil didaftarkan');

        return redirect()->to('/login/daftar');
    }

    public function login()
    {
        $muser = new UserModels();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek = $muser->get_data($email, $password);

        if (($cek['user_email'] == $email) && ($cek['user_password'] == $password)) {
            session()->set('user_email', $cek['user_email']);
            session()->set('user_nama', $cek['user_nama']);
            return redirect()->to('/home');
        } else {
            session()->setFlashdata('gagal', 'Mohon maaf username / Password salah');
            return redirect()->to('/login/masuk');
        }
    }

    public function keluar()
    {
        session()->destroy();
        return redirect()->to('/login/masuk');
    }

    public function masuk()
    {
        # code...
        return view('/login/masuk');
    }

    public function daftar()
    {
        # code...
        return view('/login/daftar');
    }

    public function lupa()
    {
        # code...
        return view('/login/lupa-sandi');
    }

    public function vertif()
    {
        # code...
        return view('/login/kode-vertifikasi');
    }

    public function baru()
    {
        # code...
        return view('/login/password-baru');
    }
}
