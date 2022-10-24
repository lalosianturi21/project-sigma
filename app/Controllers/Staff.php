<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StaffModel;

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

        $item_model = new StaffModel();
        $data['main_view'] ='staff/index';
        $data['items'] = $item_model->get_all_data();
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'staff/new';
        return view('layout', $data);
    }

    public function create()
    {
        if(!$this->validate([
            'namapengguna' => "required|alpha_numeric_space",
            'umur' => 'required|integer',
            'profesi' => 'required|alpha_numeric_space',
        ])){
            $data['main_view'] = 'staff/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
    }  

    $item_model = new StaffModel();
    $item_model->create_data($this->request);
    $this->session->setFlashdata('success', 'Barang berhasil disimpan');
    return redirect()->to('/staff');
}

public function delete($id) {
    $id = $this->request->getVar('id');
    $item_model = new ItemModel();
    $item_model->delete($id);
    $this->session->setFlashdata('success', 'Barang berhasil dihapus');
    return redirect()->to('/items');
}

public function edit($id){
    $item_model = new StaffModel();
    $data['main_view'] = 'staff/edit';
    $data['item'] = $item_model->get_data($id);
    return view('layout', $data);
}

public function update($id)
    {
        if(!$this->validate([
            'namapengguna' => "required|alpha_numeric_space",
            'umur' => 'required|integer',
            'profesi' => 'required|alpha_numeric_space',
        ])){
            $data['main_view'] = 'staff/edit';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }
    
        $item_model = new StaffModel();
        $item_model->update_data($id, $this->request);
        $this->session->setFlashdata('success', 'Barang berhasil diperbaharui');
        return redirect()->to('/staff');

    }   
}
