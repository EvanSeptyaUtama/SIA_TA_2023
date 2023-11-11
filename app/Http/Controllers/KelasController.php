<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Menampilkan seluruh data pada table kelas
    public function index_kelas()
    {
        $data_kelas = Kelas::all();
        return view('admin.umum.kelas.umum_kelas', compact('data_kelas'));
    }

    public function tampil_kelas(Kelas $data_kelas)
    {
        
        return view('admin.umum.kelas.kelas.index_kelas', compact('data_kelas'));
    }

    public function tambah_kelas()
    {
        return view('admin.umum.kelas.umum_kelas_tambah');
    }

    public function store_kelas(Request $request)
    {

        //Validasai pada field tabel Guru
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return Redirect::route('index_kelas')->with('success', 'Berhasil menambahkan data kelas!!');
    }

    public function edit_kelas(Kelas $data_kelas)
    {
        return view('admin.umum.kelas.umum_kelas_edit', compact('data_kelas'));
    }
    public function update_kelas(Request $request, Kelas $data_kelas)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $data_kelas->update([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return Redirect::route('index_kelas', $data_kelas)->with('success', 'Berhasil mengedit data kelas!!');
    }
    public function hapus_kelas(Kelas $data_kelas)
    {
        $data_kelas->delete();
        return Redirect::route('index_kelas')->with('success', 'Berhasil menghapus data!!');
    }
}
