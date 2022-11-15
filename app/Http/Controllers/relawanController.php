<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class relawanController extends Controller
{
    public function moreorganization()
    {
        $organisasis = Organisasi::all();
        return view('moreorganization',[
            'organisasis'=>$organisasis
        ]);
    }
    public function index()
    {
        $organisasi = Organisasi::limit(4)->get();
        return view('dashboardvolunteer', [
            'organisasi' => $organisasi
        ]);
    }
}
