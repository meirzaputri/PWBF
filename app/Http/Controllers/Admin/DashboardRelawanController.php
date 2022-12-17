<?php

namespace App\Http\Controllers\Admin;

use App\Models\Relawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardRelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relawans = Relawan::all();
        return view('admin.volunsidebar', [
            'relawans' => $relawans
        ]);
    }
    public function indexorg()
    {
        $relawans = Relawan::all();
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
        return view('admin.tambahdatarelawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama_relawan' => 'required',
        //     'tgllahir_relawan' => 'required',
        //     'usia_relawan' => 'required',
        //     'jk_relawan' => 'required',
        //     'alamat_relawan' => 'required',
        //     'pekerjaan_relawan' => 'required',
        //     'notelp_relawan' => 'required',
        //     'email_relawan' => 'required|email:dns',
        //     'username_relawan' => 'required|min:4'
        // ]);
        // Relawan::create($validatedData);
        // return redirect('/volunteer')->with ('success', 'New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Relawan $detidentitasrelawan)
    {
        $detailData = Relawan::find($detidentitasrelawan->id);
        return view('admin.showdatarelawan', [
            'relawan' => $detailData
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Relawan $volunteer)
    {
        return view('admin.editdatarelawan', [
            'relawan' => $volunteer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relawan $volunteer)
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
        ]);
        
        Relawan::where('id', $volunteer->id)
            ->update($validatedData);

        return redirect('/volunteer')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relawan $volunteer)
    {
        Relawan::destroy($volunteer->id);
        return redirect('/volunteer')->with('success', 'Data has been deleted');
    }
}
