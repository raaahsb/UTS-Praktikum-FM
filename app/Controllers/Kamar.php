<?php

namespace App\Controllers;

class Kamar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'kamar hotel'
        ];
        return view('/kamar/kamar', $data);
    }
}
