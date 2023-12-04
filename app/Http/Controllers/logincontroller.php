<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Implementasi logika autentikasi
        if ($this->authenticate($credentials)) {
            return redirect('/beranda');
        } else {
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }

    protected function authenticate($credentials)
    {
        // Implementasi logika autentikasi sesuai kebutuhan
        // Contoh sederhana, selalu berhasil
        return true;
    }
}
