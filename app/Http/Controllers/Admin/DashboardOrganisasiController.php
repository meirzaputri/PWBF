<?php

namespace App\Http\Controllers\Admin;

use App\Models\Divisi;
use App\Models\Kegiatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisasis = Organisasi::all();
        return view('admin.allorganisasi',[
            'organisasis' => $organisasis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Organisasi $detallorganisasi)
    {
        $detailData = Organisasi::find($detallorganisasi->id);
        return view('admin.showdataorganisasiall', [
            'organisasi'=>$detailData
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisasi $allorganisasi)
    {
        return view('admin.editdataorgall', [
            'organisasi' => $allorganisasi,
            'divisis'=> Divisi::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisasi $allorganisasi)
    {
        $divisi = Divisi::where('nama_divisi', $request->input('divisi'))->first();
        // dd($organisasi->id);
        $request->merge(['divisi_id', $divisi->id]);
        $validatedData = $request->validate([
            'nama_organisasi' => 'required',
            'divisi_id' => 'required',
            'alamat_organisasi' => 'required',
            'email_organisasi' => 'required',
            'notelp_organisasi' => 'required',
            'status_organisasi' => 'required',
            'deskripsi_organisasi' => 'required'
       
        ]);
        Organisasi::where('id', $allorganisasi->id)
        ->update($validatedData);

    return redirect('/allorganisasi')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisasi $allorganisasi)
    {
        Organisasi::destroy($allorganisasi->id);
        $kegiatans = Kegiatan::where('organisasi_id', $allorganisasi->id)->get();

        foreach ($kegiatans as $kegiatan) {
            Kegiatan::destroy($kegiatan->id);
        }        

        return redirect("/allorganisasi/")->with ('success', 'Data has been deleted');
    }
}
