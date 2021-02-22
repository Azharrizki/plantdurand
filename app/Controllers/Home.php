<?php

namespace App\Controllers;

use App\Models\UserModels;

class Home extends BaseController
{
    public function index()
    {
        return view('/plantduran/index');
    }
}
