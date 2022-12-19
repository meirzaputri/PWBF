<?php

namespace App\Http\Controllers\Organisasi;

use App\Models\Relawan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardOrganisasiVolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisasi = Organisasi::where('nama_organisasi', Auth::user()->name)->first();
        // dd($organisasi->id);
        $relawans = DB::select(DB::raw('SELECT * FROM relawans
                                JOIN pendaftaran_kegiatans ON relawans.id = pendaftaran_kegiatans.relawan_id
                                JOIN kegiatans ON kegiatans.id =pendaftaran_kegiatans.kegiatan_id
                                WHERE kegiatans.organisasi_id=:id'), ['id' => $organisasi->id]);
        return view('organisasi.volunteersorg', [
            'relawans' => $relawans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisasi.tambahdatarelawanorg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_relawan' => 'required',
            'tgllahir_relawan' => 'required',
            'usia_relawan' => 'required',
            'jk_relawan' => 'required',
            'alamat_relawan' => 'required',
            'pekerjaan_relawan' => 'required',
            'notelp_relawan' => 'required',
            'email_relawan' => 'required|email:dns',
            'username_relawan' => 'required|min:4'
        ]);
        Relawan::create($validatedData);
        return redirect('/volunteer')->with('success', 'New data has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Relawan $detrelawanorg)
    {
        $detailData = Relawan::find($detrelawanorg->id);
        return view('organisasi.showdatarelawanorg', [
            'relawan' => $detailData
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relawan $relawansorg)
    {
        Relawan::destroy($relawansorg->id);
        return redirect('/volunteersorg')->with('success', 'Data has been deleted');
    }
}
