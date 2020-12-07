<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\datakelas2;

class DataKelas2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagename='Data Siswa';
        $data=datakelas2::all();
        return view('admin.datakelas2.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagename='Form Input Data Kelas 2';
        return view('admin.datakelas2.create', compact('pagename'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtnama' => 'required',
            'txtkelas' => 'required',
            'txtagama' => 'required',
            'txtkelamin' => 'required',
        ]);

        $data_kelas2 = new datakelas2([
            'nama' => $request->get('txtnama'),
            'kelas' => $request->get('txtkelas'),
            'agama' => $request->get('txtagama'),
            'kelamin' => $request->get('txtkelamin'),
            ]);
            
        $data_kelas2->save();
        return redirect('admin/datakelas2')->with('sukses', 'Data Kelas 2 berhasil disimpan');
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
        $pagename = 'Update Data Kelas 2';
        $data = datakelas2::find($id);
        return view('admin.datakelas2.edit', compact('data', 'pagename'));
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
        $request->validate([
            'txtnama' => 'required',
            'txtkelas' => 'required',
            'txtagama' => 'required',
            'txtkelamin' => 'required',
        ]);

        $data_kelas2 = datakelas2::find($id);

        $data_kelas2->nama = $request->get('txtnama');
        $data_kelas2->kelas = $request->get('txtkelas');
        $data_kelas2->agama = $request->get('txtagama');
        $data_kelas2->kelamin = $request->get('txtkelamin');
            
        $data_kelas2->save();
        return redirect('admin/datakelas2')->with('sukses', 'Data Siswa Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_kelas2 = datakelas2::find($id);
        $data_kelas2->delete();
        return redirect('admin/datakelas2')->with('sukses', 'Data Siswa berhasil dihapus'); 
    }
}