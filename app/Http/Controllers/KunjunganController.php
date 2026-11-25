<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = Kunjungan::orderBy('id_kunjungan','desc')->get();
        return view('index',compact('kunjungan'));
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function simpan(Request $request) 
    {
        Kunjungan::create($request->all());
        return redirect('/kunjungan');
    }
    public function hapus ($id)
    {
        Kunjungan::where('id_kunjungan',$id)->delete();
        return redirect('/kunjungan');
    }
}
