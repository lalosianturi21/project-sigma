<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Staff extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pages/staff';
        return view('layout', $data);
    }
}
