<?php

namespace App\Controllers;

class Home extends BaseController
{
  /* Ubah File sementara blablabla */
    public function index()
    {
        $data['main_view'] = 'pages/home';
        return view('layout', $data);
    }
}
