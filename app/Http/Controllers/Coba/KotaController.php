<?php

namespace App\Http\Controllers\Coba;

use App\Http\Controllers\Controller;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KotaController extends Controller
{
    public function index_kota()
    {
        $data_kota = Kota::latest()->paginate(6);
        return view('admin.coba.kota.kota_index', compact('data_kota'));
    }
    public function tampil_kota(Kota $tampil_kota)
    {
        return view('admin.coba.kota.kota_tampil', compact('tampil_kota'));
    }
    public function tambah_kota()
    {
        return view('admin.coba.kota.kota_tambah');
    }
    public function store_kota(Request $request)
    {
        $request->validate([
            'nama_kota' => 'required'
        ]);

        Kota::create([
            'nama_kota' => $request->nama_kota
        ]);

        return Redirect::route('index_kota')->with('success', 'Data kota berhasil ditambahkan!!');
    }
    public function edit_kota(Kota $edit_kota)
    {
        return view('admin.coba.kota.kota_edit', compact('edit_kota'));
    }
    public function update_kota(Request $request, Kota $update_kota)
    {
        $request->validate([
            'nama_kota' => 'required'
        ]);

        $update_kota->update([
            'nama_kota' => $request->nama_kota
        ]);

        return Redirect::route('index_kota')->with('success', 'Data kota berhasil diubah!!');
    }
    public function hapus_kota(Kota $hapus_kota)
    {
        $hapus_kota->delete();
        return Redirect::route('index_kota')->with('success', 'Data kota berhasil di hapus!!');
    }
}
