<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class relawanController extends Controller
{
    public function moreorganization()
    {
<<<<<<< Updated upstream
        $detorganisasi = Organisasi::all();
        return view('moreorganization', [
            'detorganisasi' => $detorganisasi
=======
        $organisasis = Organisasi::all();
        return view('moreorganization',[
            'organisasis'=>$organisasis
>>>>>>> Stashed changes
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
