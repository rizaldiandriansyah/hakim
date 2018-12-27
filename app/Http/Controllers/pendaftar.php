<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendaftar extends Controller
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = biodata::where('id',$id)->get();

        return view('kontak_edit',compact('data'));
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
        $biodata->user_id = $user_id;
        $biodata->nama = Input::get('nama');
        $biodata->no_ktp = Input::get('no_ktp');
        $biodata->tempat_lahir = Input::get('tempat_lahir');
        $biodata->tanggal_lahir = Input::get('tanggal_lahir');
        $biodata->telp = Input::get('telp');
        $biodata->alamat = Input::get('alamat');
        $biodata->desa = Input::get('desa');
        $biodata->kecamatan = Input::get('kecamatan');
        $biodata->pilih_periksa = Input::get('pilih_periksa');
        if($file = $request->hasFile('url_foto')) 
        {
            $namaFile = $user->id;
            $file = $request->file('url_foto') ;
            $fileName = $namaFile.'_'.$file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $biodata->url_foto = $fileName ;
        }
        $biodata->save();
        return redirect()->route('/pendaftar/dashboard./pendaftar/dashboard')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
