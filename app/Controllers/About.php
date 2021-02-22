<?php

namespace App\Controllers;

use App\Models\UserModels;

class About extends BaseController
{
    public function index()
    {
        return view('/plantduran/about');
    }
}
