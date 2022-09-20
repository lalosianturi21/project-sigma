<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penjualan extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pages/penjualan';
        return view('layout', $data); 
    }
}
