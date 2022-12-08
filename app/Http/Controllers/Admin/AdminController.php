<?php

namespace App\Http\Controllers\Admin;


use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $organisasis = Organisasi::all();
        return view('admin.dashboardadmin',[
            'organisasis' => $organisasis
        ]);
    }
}
