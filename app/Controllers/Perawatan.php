<?php

namespace App\Controllers;

use App\Models\UserModels;

class Perawatan extends BaseController
{
    public function index()
    {
        return view('/plantduran/perawatan');
    }
}
