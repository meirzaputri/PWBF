<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('login', [
            'login' => true
        ]);
    }
    public function loginpost()
    {
        if (Auth::attempt(["email" => request("email"), "password" => request("password")])) {
            return redirect('/volunteers');
        }
        return back()->with("Salah", "Silahkan cek kembali email atau password Anda")->with("email", request("email"));
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/volunteer');
        }

        return back()->with('loginError', 'Login is failed!')->withInput();
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
