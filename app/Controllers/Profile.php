<?php

namespace App\Controllers;

use App\Models\UserModels;

class Profile extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModels();
    }

    public function index()
    {
        $data = [
            'user' => $this->userModel->getUser()
        ];

        return view('/plantduran/profile', $data);
    }

    public function detail($id)
    {
        $data = [
            'user' => $this->userModel->getUser($id)
        ];

        return view('/plantduran/detail', $data);
    }
}
