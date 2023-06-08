<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        $pageData = [
            'title' => 'Halaman Login'
        ];
        return view('auth.login', $pageData);
    }
    public function authLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            return redirect('/customer/dashboard')->with('success', 'Login Berhasil!!');
        } else {
            return redirect('/')->with('error', 'Login Gagal!!');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus sesi pengguna
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
