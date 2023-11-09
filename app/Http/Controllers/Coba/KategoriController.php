<?php

namespace App\Http\Controllers\Coba;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function index_kategori()
    {
        $data_kategori = Kategori::all();
        return view('admin.coba.kategori.kategori_index', compact('data_kategori'));
    }
    public function tampil_kategori(Kategori $data_kategori)
    {
        return view('admin.coba.kategori.kategori_tampil', compact('data_kategori'));
    }
    public function tambah_kategori()
    {
        return view('admin.coba.kategori.kategori_tambah');
    }
    public function store_kategori(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return Redirect::route('index_kategori');
    }
    public function edit_kategori(Kategori $data_kategori)
    {
        return view('admin.coba.kategori.kategori_edit', compact('data_kategori'));
    }
    public function update_kategori(Request $request, Kategori $data_kategori)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $data_kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return Redirect::route('index_kategori');
    }
    public function hapus_kategori(Kategori $data_kategori)
    {
        $data_kategori->delete();
        return Redirect::route('index_kategori');
    }

    ////////////////Bagian Query Builder

}
