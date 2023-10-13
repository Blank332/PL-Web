<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Ganti dengan nama tampilan yang sesuai
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login sukses, redirect ke halaman yang sesuai
            return redirect('/dashboard'); // Ganti dengan rute yang sesuai
        }

        // Login gagal, redirect kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['login' => 'Login failed. Please check your credentials.']);
    }
}
