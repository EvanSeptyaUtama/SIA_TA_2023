<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\HalamanUtama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HalamanUtamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Admin
    public function index_halaman_utama()
    {
        $data_halaman_utama = HalamanUtama::all();
        return view('admin.Profil_Instansi.hu.halaman_utama', compact('data_halaman_utama'));
    }
    //Profile Instansi
    public function tampil_web_halaman_utama()
    {
        $hal_utama = HalamanUtama::all();
        return view('admin.Profil_Instansi.hu.halaman_utama_show', compact('hal_utama'));
    }

    public function tambah_halaman_utama()
    {
        return view('admin.Profil_Instansi.hu.halaman_utama_tambah');
    }

    public function store_halaman_utama(Request $request)
    {
        $request->validate([
            'nama_yayasan' => 'required',
            'nama_instansi' => 'required',
            'penjelasan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        $file = $request->file('gambar');
        $path = time() . '_' . $request->nama_instansi . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        HalamanUtama::create([
            'nama_yayasan' => $request->nama_yayasan,
            'nama_instansi' => $request->nama_instansi,
            'penjelasan' => $request->penjelasan,
            'gambar' => $path,
        ]);

        return Redirect::route('index_halaman_utama')->with('success', 'Berhasil menambahkan data pada halaman utama!!');
    }
    //Show detail product
    public function show_halaman_utama(HalamanUtama $halaman_utama)
    {
        return view('admin.Profil_Instansi.hu.halaman_utama_show', compact('halaman_utama'));
    }

    public function edit_halaman_utama(HalamanUtama $halaman_utama)
    {
        return view('admin.Profil_Instansi.hu.halaman_utama_edit', compact('halaman_utama'));
    }
    public function update_halaman_utama(Request $request, HalamanUtama $halaman_utama)
    {
        $request->validate([
            'nama_yayasan' => 'required',
            'nama_instansi' => 'required',
            'penjelasan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('gambar');
        $path = time() . '_' . $request->nama_instansi . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));
        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/', $gambar->hashName());

        $halaman_utama->update([
            'nama_yayasan' => $request->nama_yayasan,
            'nama_instansi' => $request->nama_instansi,
            'penjelasan' => $request->penjelasan,
            'gambar' => $path,
        ]);

        return Redirect::route('index_halaman_utama', $halaman_utama)->with('success', 'Berhasil mengedit data halaman utama!!');
    }

    public function hapus_halaman_utama(HalamanUtama $halaman_utama)
    {
        $halaman_utama->delete();
        return Redirect::route('index_halaman_utama')->with('success', 'Berhasil menghapus data pada halaman utama!!');
    }
}
