<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    function index(){
        $pageData = [
            'title' => 'Halaman Daftar'
        ];
        return view('auth.daftar', $pageData);
    }
    public function input(Request $request){
        $validasiData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);

        $validasiData['password'] = Hash::make($validasiData['password']);

        try {
            User::create($validasiData);
            return redirect('/')->with('success', 'Registrasi Berhasil Silahkan Login!!');
        } catch (\Exception $e) {
            return redirect('/daftar')->with('error', 'Registrasi Gagal, Silahkan Coba Lagi!!');
        }

    }
}
