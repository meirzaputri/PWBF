<?php

namespace App\Http\Controllers\Admin;


use App\Models\Relawan;
use App\Models\Kegiatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $jumlahOrganisasi = Organisasi::all()->count();
        $jumlahRelawan = Relawan::all()->count();
        $jumlahKegiatan = Kegiatan::all()->count();
        return view('admin.dashboardadmin', [
            'jumlahOrganisasi' => $jumlahOrganisasi,
            'jumlahRelawan' => $jumlahRelawan,
            'jumlahKegiatan' => $jumlahKegiatan
        ]);
    }
}
