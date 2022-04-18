<?php

namespace App\Controllers;

use App\Models\pemesananModels;

class admin extends BaseController
{

    protected $pemesananModels;
    public function __construct()
    {
        $this->pemesananModels = new pemesananModels();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin panel',
            'pemesanan' => $this->pemesananModels->getDetail()
        ];
        return view('dashboard', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'detail data',
            'detail' => $this->pemesananModels->getDetail($id)
        ];
        if (empty($data['detail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan :(");
        }
        return view('admin/detail', $data);
    }
}
