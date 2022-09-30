<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Items extends BaseController
{
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if(!$this->session->get('user_id')){
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/item';
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'pages/item';
        return view('layout', $data);
    }

    public function create()
    {
        if(!$this->validate([
            'nameuser' => "required|alpha_numeric_space",
            'umur' => 'required|integer',
            'profesi' => 'required|alpha_numeric_space',
        ])){

        }
    

    $data['main_view'] = 'items/index';
    $this->session->setFlashdata('success', 'Barang berhasil disimpan');
    return view('layout', $data);
}
}
