<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Cregister extends Controller
{
     // Tampilkan form registrasi
    public function showForm()
    {
        return view('register');
    }

        // Proses registrasi
    public function register(Request $request)
    {
            // Validasi input
        $validator = Validator::make($request->all(), [
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }

            // Simpan user baru
    User::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

        return redirect()->route('login.index')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
