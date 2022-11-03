<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $organisasi = Organisasi::all();
        return view('welcome',[
            'organisasi'=> $organisasi
        ]);
    }
}
