<?php

namespace App\Http\Controllers\Relawan;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelawanController extends Controller
{
    public function moreorganization()
    {
        $organisasis = Organisasi::all();
        return view('relawan.moreorganization',[
            'organisasis'=>$organisasis
        ]);
    }
    public function index()
    {
        $organisasi = Organisasi::all();
        return view('relawan.dashboardvolunteer', [
            'organisasi' => $organisasi
        ]);
    }
}
