<?php

namespace App\Http\Controllers\Admin;

use App\Models\Divisi;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardOrganisasiPerDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(Divisi $orgperdiv)
    {
        $organisasis = Organisasi::where('divisi_id', $orgperdiv->id)->get();
        return view('admin.organisasi-per-div', [
            'organisasis' => $organisasis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisasi $orgperdiv)
    {
        return view('admin.editdataorganisasiperdivisi', [
            'organisasi' => $orgperdiv
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisasi $orgperdiv)
    {
        
        // dd(->id));
        $divisi = Divisi::where('nama_divisi', $request->input('divisi'))->first();
        // dd($organisasi->id);
        $request->merge(['divisi_id', $divisi->id]);
        // dd($request->input('organisasi_id'));
        $validatedData = $request->validate([
            'nama_organisasi' => 'required',
            'divisi_id' => 'required',
            'alamat_organisasi' => 'required',
            'email_organisasi' => 'required',
            'notelp_organisasi' => 'required',
            'deskripsi_organisasi' => 'required'
       
        ]);
        Organisasi::where('id', $orgperdiv->id)
        ->update($validatedData);

    return redirect('/orgperdiv/' . $divisi->id)->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisasi $orgperdiv)
    {
        Organisasi::destroy($orgperdiv->id);
        return redirect("/orgperdiv/" . $orgperdiv->divisi_id)->with ('success', 'Data has been deleted');
    }
}
