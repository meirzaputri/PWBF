<?php

namespace App\Http\Controllers\Relawan;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;

class OrganisasiController extends Controller
{
    public function index(){
        $kegiatans = Kegiatan::all();
        return view('detevent',[
            'kegiantans' => $kegiatans
        ]);
    }
}
