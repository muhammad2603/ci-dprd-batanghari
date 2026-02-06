<?php

namespace App\Controllers;

class HomePage extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }
}
