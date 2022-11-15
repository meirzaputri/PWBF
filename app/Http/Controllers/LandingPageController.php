<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
