<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('login', [
            'login' => true
        ]);
    }
    public function loginpost(){
     if(Auth::attempt(["email"=>request("email"),"password"=>request("password")])){
        return redirect('/volunteers');
     } return back()->with("Salah","Silahkan cek kembali email atau password Anda")->with("email",request("email"));
    
}

    
}
