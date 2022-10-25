<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kegiatan;

class OrganisasiController extends Controller
{
    public function index()
    {
        $organisasi = Kegiatan::where('organisasi_id',1)->get();
        return view('detailorg1', [
            'organisasi' => $organisasi

        ]);
 
    }
}
