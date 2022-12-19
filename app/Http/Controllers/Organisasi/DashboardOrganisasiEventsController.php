<?php

namespace App\Http\Controllers\Organisasi;

use App\Models\Kegiatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardOrganisasiEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisasi = Organisasi::where('nama_organisasi', Auth::user()->name)->first();
        $kegiatans = Kegiatan::where('organisasi_id', $organisasi->id)->get();
        return view('organisasi.kegiatan-organisasi', [
            'kegiatans' => $kegiatans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisasi.tambahdatakegiatanorg');
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
            'nama_event' => 'required',
            'tglmulai_event' => 'required',
            'tglberakhir_event' => 'required',
            'deskripsi_event' => 'required',
            'lokasi_event' => 'required',
            'status_event' => 'required',
        ]);
        Kegiatan::create($validatedData);
        return redirect('/eventsorg')->with('success', 'New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $detkegiatanorg)
    {
        $detailData = Kegiatan::find($detkegiatanorg->id);
            return view('organisasi.showdatakegiatanorg', [
                'kegiatan'=>$detailData
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
    public function destroy(Kegiatan $eventsorg)
    {
        Kegiatan::destroy($eventsorg->id);
        return redirect('/eventsorg')->with ('success', 'Data has been deleted');
    }
}
