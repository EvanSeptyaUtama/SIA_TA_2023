<?php

namespace App\Http\Controllers\Coba;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kota;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProdukController extends Controller
{
    public function index_produk(Request $request)
    {


        $data_produk = Produk::all();
        // $data_produk = Produk::all();
        return view('admin.coba.produk.produk_index', compact('data_produk'));
    }
    public function tampil_produk(Produk $data_produk)
    {
        return view('admin.coba.produk.produk_tampil', compact('data_produk'));
    }
    public function tambah_produk()
    {
        $kategoris = Kategori::all();
        $kotas = Kota::all();
        return view('admin.coba.produk.produk_tambah', compact('kategoris', 'kotas'));
    }
    public function store_produk(Request $request)
    {
        $current_date_time = date('Y-m-d H:i:s');
        // $this->validate($request, array(
        //     'nama_produk' => 'required|max:255',
        //     'harga_produk' => 'required'
        // ));
        $kota_id = $request->input('kota_id');
        $kategori_id = $request->input('kategori_id');
        $nama_produk = $request->input('nama_produk');
        $harga_produk = $request->input('harga_produk');
        $current_date_time = date('Y-m-d H:i:s');

        $produk = array(
            "kota_id" => $kota_id,
            "kategori_id" => $kategori_id,
            "nama_produk" => $nama_produk,
            "harga_produk" => $harga_produk,
            "created_at" => $current_date_time,
            "updated_at" => $current_date_time
        );
        $produk = new Produk;

        $produk->kota_id = $request->kota_id;
        $produk->kategori_id = $request->kategori_id;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;


        $produk->save();

        return Redirect::route('index_produk')
            ->with('sucess', 'Berhasil menambahakan data produk!!');
    }
    public function edit_produk(Produk $data_produk)
    {
        $kategoris = Kategori::all();
        $kotas = Kota::all();
        return view('admin.coba.produk.produk_edit', compact('data_produk', 'kategoris', 'kotas'));
    }
    public function update_produk(Request $request, Produk $data_produk)
    {
        $this->validate($request, array(
            'nama_produk' => 'required|max:255',
            'harga_produk' => 'required',

        ));
        $data_produk->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'kota_id' => $request->kota_id,
            'kategori_id' => $request->kategori_id,
        ]);

        return Redirect::route('index_produk');
    }
    public function hapus_produk(Produk $data_produk)
    {
        $data_produk->delete();
        return Redirect::route('index_produk');
    }
}
