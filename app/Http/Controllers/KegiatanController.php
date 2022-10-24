<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::with('organisasi')->get();
        return view('detevent1', compact('kegiatans'));
    }
}
