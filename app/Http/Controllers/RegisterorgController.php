<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class RegisterorgController extends Controller
{
    public function index()
    {
        return view('organisasiregister');
    }

    public function registerorg()
    {

        $nama = request('orgname');

        $user = [
            'name' => $nama,
            'alamat' => request('alamat'),
            'notelp' => request('notelp'),
            'email' => request('email'),
            'username' => request('username'),
            'password' => request('password'),
            // 'stts_org' => '1',
            // 'level' => '1'
        ];
        User::create($user);

        return redirect('/login')->with('Success', 'Selamat Registrasi Berhasil')->with('Email', request('email'));
    }
    public function registerorg2(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|max:225|unique:users',
            'username' => 'required|min:3|max:225|unique:users',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5|same:password'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        return view('formorganisasi', [
            'validData' => $validatedData
        ]);
    }
    public function registpost()
    {
    }
}
