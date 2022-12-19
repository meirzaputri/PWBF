<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class OrganisasiRegistrasiController extends Controller
{
    public function index()
    {
        return view('formorganisasi');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email:dns|max:225|unique:users',
            'username' => 'required|min:3|max:225|unique:users',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5|same:password',
            'name' => 'required',
            'divisi_id' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'level' => 'required'

        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $divisi_id = $request->input('divisi_id');
        $nama = $request->input('name');
        $alamat = $request->input('alamat');
        $email = $request->input('email');
        $username = $request->input('username');
        $notelp = $request->input('notelp');
        $password = Hash::make($request->input('password'));

        User::create($validatedData);
        Organisasi::create([
            'divisi_id' => $divisi_id,
            'nama_organisasi' => $nama,
            'alamat_organisasi' => $alamat,
            'email_organisasi' =>$email,
            'username_organisasi' => $username,
            'notelp_organisasi' => $notelp,
            'password_organisasi' => $password
        ]);
        return redirect('/login')->with('success', 'Registrasi Berhasil');
    }
}
