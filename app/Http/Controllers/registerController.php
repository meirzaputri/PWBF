<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function registervolun()
    {
        $nama = request('first') . ' ' . request('last');

        $user = [
            'name' => $nama,
            'alamat' => request('alamat'),
            'domisili' => request('domisili'),
            'email' => request('email'),
            'notelp' => request('notelp'),
            'username' => request('username'),
            'password' => request('password'),
            'tgllhr_relawan' => request('tgllhr_relawan'),
            'jk_relawan' => request('gender'),
            'pekerjaan_relawan' => request('pekerjaan_relawan'),
            'stts_relawan' => '1',
            'level' => '1'
        ];
        User::create($user);

        return redirect('/login')->with('Success', 'Selamat Registrasi Berhasil')->with('Email', request('email'));
    }
    public function validasivolun(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'alamat' => 'required|max:225',
            'domisili' => 'required|max:225',
            'email' => 'required|email:dns|max:225|unique:users',
            'tgllahir_relawan' => 'required',
            'jk_relawan' => 'required',
            'username' => 'required|min:3|max:225|unique:users',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5|same:password'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        return view('formvolunteers', [
            'validData' => $validatedData
        ]);
    }
    public function registpost()
    {
    }
}
