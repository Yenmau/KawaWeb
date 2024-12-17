<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Clogin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    function login(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect('login')
                ->withErrors($validasi)
                ->withInput();
        }

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            //Jika Berhasil
            return redirect('dashboard');
        } else {
            //Jika Gagal
            return redirect('login')->withErrors('Email dan Password Salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
