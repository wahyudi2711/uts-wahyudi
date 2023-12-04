<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berandacontroller extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function logout()
    {
        // Implementasi logika logout jika diperlukan

        return redirect('/login');
    }
}
