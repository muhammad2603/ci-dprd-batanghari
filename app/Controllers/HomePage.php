<?php

namespace App\Controllers;

class HomePage extends BaseController
{
    public function index(): string
    {
        $data_page = [
            "title" => 'Beranda',
        ];
        return view('homepage', $data_page);
    }
}
