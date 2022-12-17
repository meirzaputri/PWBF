<?php

namespace App\Http\Controllers\Organisasi;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganisasiController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::where('organisasi_id',1)->get();
        return view('organisasi.dashboardorganisasi', [
            'kegiatans' => $kegiatans

        ]);
 
    }
   
}
