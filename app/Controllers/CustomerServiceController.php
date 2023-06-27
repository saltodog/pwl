<?php

namespace App\Controllers;

class CustomerServiceController extends BaseController
{
    public function index()
    {
        // Tampilkan view halaman customer service
        return view('beranda');
    }
}
