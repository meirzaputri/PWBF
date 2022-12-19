<?php

namespace App\Http\Controllers\Organisasi;

use App\Models\Relawan;
use App\Models\Kegiatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrganisasiController extends Controller
{
    public function index()
    {
        // dd(Organisasi::where('nama_organisasi', Auth::user()->name)->first());
        $organisasi = Organisasi::where('nama_organisasi', Auth::user()->name)->first();
        $kegiatans = Kegiatan::where('organisasi_id',$organisasi->id)->get();
        $jumlahRelawan = Relawan::all()->count();
        $jumlahKegiatan = $kegiatans->count();
        return view('organisasi.dashboardorganisasi', [
            'jumlahRelawan' => $jumlahRelawan,
            'jumlahKegiatan' => $jumlahKegiatan

        ]);
 
    }
   
}
