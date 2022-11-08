<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $organisasi = Organisasi::all();
        return view('welcome',[
            'organisasi'=> $organisasi
        ]);
    }
}
