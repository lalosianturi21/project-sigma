<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pages/dashboard';
        return view('layout', $data);
    }
}
