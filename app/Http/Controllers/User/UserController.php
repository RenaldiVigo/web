<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\dataguru;
use App\datakelas1;
use App\datakelas2;
use App\datakelas3;
use App\datakelas4;
use App\datakelas5;
use App\datakelas6;

class UserController extends Controller
{
    public function kelas1(){

    	$data=datakelas1::all();
        return view('user.siswa.kelas1', compact('data'));
    }
    public function kelas2(){

    	$data=datakelas2::all();
        return view('user.siswa.kelas2', compact('data'));
    }
    public function kelas3(){
    	$data=datakelas3::all();
        return view('user.siswa.kelas3', compact('data'));
    }
    public function kelas4(){

    	$data=datakelas4::all();
        return view('user.siswa.kelas4', compact('data'));
    }
    public function kelas5(){

    	$data=datakelas5::all();
        return view('user.siswa.kelas5', compact('data'));
    }
    public function kelas6(){

    	$data=datakelas6::all();
        return view('user.siswa.kelas6', compact('data'));
    }
    
    // sambutan
    public function sambutan(){

    	return view('user.sambutan.sambutan');
    }
    public function visimisi(){
    // (namafolder.kelasnya)
    	return view('user.sambutan.visimisi');
    }
    public function fotokegiatan(){
        // (namafolder.kelasnya)
            return view('user.galeri.fotokegiatan');
    }
    public function berita(){
        // (namafolder.kelasnya)
            return view('user.galeri.berita');
    }
    public function guruall(){
        // (namafolder.kelasnya)
        $data=dataguru::all();
        return view('user.sambutan.guruall', compact('data'));
    }
}

