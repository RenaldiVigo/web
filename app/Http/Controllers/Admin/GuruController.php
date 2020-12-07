<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\dataguru;   


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagename='Data Guru';
        $data=dataguru::all();
        return view('admin.dataguru.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            $pagename='Form Input Data Guru';
            return view('admin.dataguru.create', compact('pagename'));
        }
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
            'txtguru' => 'required',
            'txttanggal' => 'required',
            'txtkelamin' => 'required',
            'txtnip' => 'required',
            'txtjabatan' => 'required',
            'txtbekerja' => 'required',
        ]);

        $data_guru = new dataguru([
            'nama_guru' => $request->get('txtguru'),
            'tanggal_lahir' => $request->get('txttanggal'),
            'jenis_kelamin' => $request->get('txtkelamin'),
            'nip' => $request->get('txtnip'),
            'jabatan' => $request->get('txtjabatan'),
            'bekerja' => $request->get('txtbekerja'),
            ]);
            
        $data_guru->save();
        return redirect('admin/dataguru')->with('sukses', 'Data Guru berhasil disimpan');  
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
        $pagename = 'Update Data Guru';
        $data = dataguru::find($id);
        return view('admin.dataguru.edit', compact('data', 'pagename'));
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
            'txtguru' => 'required',
            'txttanggal' => 'required',
            'txtkelamin' => 'required',
            'txtnip' => 'required',
            'txtjabatan' => 'required',
            'txtbekerja' => 'required',
        ]);

        $data_guru = dataguru::find($id);

            $data_guru->nama_guru = $request->get('txtguru');
            $data_guru->tanggal_lahir = $request->get('txttanggal');
            $data_guru->jenis_kelamin = $request->get('txtkelamin');
            $data_guru->nip = $request->get('txtnip');
            $data_guru->jabatan = $request->get('txtjabatan');
            $data_guru->bekerja = $request->get('txtbekerja');
            
        $data_guru->save();
        return redirect('admin/dataguru')->with('sukses', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_guru = dataguru::find($id);
        $data_guru->delete();
        return redirect('admin/dataguru')->with('sukses', 'Data berhasil dihapus'); 
    }
}
