<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pembelian extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pages/pembelian';
        return view('layout', $data);
    }
}
