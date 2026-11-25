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
        $request->validate([
            'nama_pasien' => 'required',
            'no_telpon' => 'required',
            'keluhan' => 'required',
            'tanggal_kunjungan' => 'required|date',
            'status' => 'required'
        ]);

        Kunjungan::create($request->all());
        return redirect('/kunjungan');
    }
    public function hapus ($id)
    {
        $kunjungan = Kunjungan::findOrfail($id);
        $kunjungan->delete();
        return redirect('/kunjungan');
    }
}
