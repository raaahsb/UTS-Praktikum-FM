<?php

namespace App\Controllers;

class Fasilitas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'fasilitas hotel'
        ];
        return view('\fasilitas\facility', $data);
    }
}
