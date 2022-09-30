<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Staff extends BaseController
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

        $data['main_view'] = 'pages/staff';
        return view('layout', $data);
    }

    public function create()
    {
        if(!$this->validate([
            'nameuser' => "required|alpha_numeric_space",
            'umur' => 'required|integer',
            'profesi' => 'required|alpha_numeric_space',
        ]))
    

            $data['main_view'] = 'pages/staff';
            $this->session->setFlashdata('success', 'Barang berhasil disimpan');
            return view('layout', $data);
    }   
}
