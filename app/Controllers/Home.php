<?php

namespace App\Controllers;

class Home extends BaseController
{
    //hello world//
    public function index()
    {
        $data['main_view'] = 'pages/home';
        return view('layout', $data);
    }
}
