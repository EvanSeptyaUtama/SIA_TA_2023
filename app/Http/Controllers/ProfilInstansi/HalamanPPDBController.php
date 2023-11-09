<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\PPDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HalamanPPDBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_halaman_ppdb()
    {
        $data_ppdb = PPDB::all();
        return view('admin.ppdb.halaman_ppdb', compact('data_ppdb'));
    }
    public function tampil_halaman_ppdb(PPDB $data_ppdb)
    {
        return view('admin.ppdb.halaman_ppdb_tampil', compact('data_ppdb'));
    }
    public function tambah_halaman_ppdb()
    {
        return view('admin.ppdb.halaman_ppdb_tambah');
    }
    public function store_halaman_ppdb(Request $request, PPDB $data_ppdb)
    {
        $request->validate([
            'judul_ppdb' => 'required',
            'penjelasan_ppdb' => 'required',
            'gambar_brosur_ppdb' => 'required',
        ]);

        //Gambar Brosur
        $file_brosur = $request->file('gambar_brosur_ppdb');
        $path_brosur = time() . '_' . $request->judul_ppdb . '.' . $file_brosur->getClientOriginalExtension();

        Storage::disk('local')->put('public/PPDB/' . $path_brosur, file_get_contents($file_brosur));


        PPDB::create([
            'judul_ppdb' => $request->judul_ppdb,
            'penjelasan_ppdb' => $request->penjelasan_ppdb,
            'gambar_brosur_ppdb' => $path_brosur,
        ]);

        return Redirect::route('index_halaman_ppdb')
            ->with('success', 'Berhasil menambahkan data ppdb!!');
    }
    public function edit_halaman_ppdb(PPDB $data_ppdb)
    {
        return view('admin.ppdb.halaman_ppdb_edit', compact('data_ppdb'));
    }
    public function update_halaman_ppdb(Request $request, PPDB $data_ppdb)
    {
        $request->validate([
            'judul_ppdb' => 'required',
            'penjelasan_ppdb' => 'required',
            'gambar_brosur_ppdb' => 'required',
        ]);

        //Gambar Brosur
        $file_brosur = $request->file('gambar_brosur_ppdb');
        $path_brosur = time() . '_' . $request->judul_ppdb . '.' . $file_brosur->getClientOriginalExtension();

        Storage::disk('local')->put('public/PPDB/' . $path_brosur, file_get_contents($file_brosur));


        $data_ppdb->update([
            'judul_ppdb' => $request->judul_ppdb,
            'penjelasan_ppdb' => $request->penjelasan_ppdb,
            'gambar_brosur_ppdb' => $path_brosur,
        ]);
        return Redirect::route('index_halaman_ppdb')
            ->with('success', 'Berhasil edit data ppdb!!');
    }
    public function hapus_halaman_ppdb(PPDB $data_ppdb)
    {
        $data_ppdb->delete();
        return Redirect::route('index_halaman_ppdb')->with('success', 'Berhasil menghapus data!!');
    }
}
