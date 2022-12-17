<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kegiatan;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class DashboardKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $kegiatans = Kegiatan::all();
            return view('admin.eventssidebar',[
                'kegiatans' => $kegiatans
            ]);
    }
    // public function indexorg()
    // {
    //         $kegiatans = Kegiatan::all();
    //         return view('dashboardorganisasi',[
    //             'kegiatans' => $kegiatans
    //         ]);
    // }


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
    public function show(Kegiatan $detkegiatan)
    {
            $detailData = Kegiatan::find($detkegiatan->id);
            return view('admin.showdatakegiatan', [
                'kegiatan'=>$detailData
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $event)
    {
        return view('admin.editdatakegiatan', [
            'kegiatan' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $event)
    {
        // dd(->id));
        $organisasi = Organisasi::where('nama_organisasi', $request->input('nama_organisasi'))->first();
        // dd($organisasi->id);
        $request->merge(['organisasi_id', $organisasi->id]);
        // dd($request->input('organisasi_id'));
        $validatedData = $request->validate([
            'nama_event' => 'required',
            'organisasi_id' => 'required',
            'tglmulai_event' => 'required',
            'tglberakhir_event' => 'required',
            'lokasi_event' => 'required',
            'status_event' => 'required',
            'deskripsi_event' => 'required'
       
        ]);
        Kegiatan::where('id', $event->id)
        ->update($validatedData);

        return redirect('/events')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $event)
    {
        Kegiatan::destroy($event->id);
        return redirect('/events')->with ('success', 'Data has been deleted');
    }
}
