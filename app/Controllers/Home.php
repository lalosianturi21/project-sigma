<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['main_view'] = 'pages/home';
        return view('layout', $data);
    }
}
