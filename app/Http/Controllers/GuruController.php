<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Exports\ExportGuru;
use App\Imports\GuruImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_guru()
    {
        $data_kelas = Kelas::all();
        $data_guru = Guru::all();
        return view('admin.Master.biodata_guru.data_guru', compact('data_guru','data_kelas'));
    }

    public function tambah_guru()
    {
        return view('admin.Master.biodata_guru.data_guru_tambah');
    }

    public function store_guru(Request $request)
    {

        //Validasi  
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_guru' => 'required',
            'foto_guru' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'tempat_lahir' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'suku' => 'required',
            'rt_rw' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
        ]);

        //Upload Foto
        $file = $request->file('foto_guru');
        $path = time() . '_' . $request->nama_guru . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Pengajar/' . $path, file_get_contents($file));
       
       Guru::create([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_guru' => $request->alamat_guru,
            'tempat_lahir' =>$request->tempat_lahir,
            'foto_guru' => $request->path,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'agama' => $request->agama,
            'suku' => $request->suku,
            'rt_rw' => $request->rt_rw,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'kelas_id' => $request->kelas_id,
       ]);

        //Setelah input akan ditampilkan pada index guru
        return Redirect::route('index_guru')->with('success', 'Berhasil menambahkan data guru!!');
    }

    public function tampil_guru(Guru $data_guru)
    {
        return view('admin.Master.biodata_guru.data_guru_tampil', compact('data_guru'));
    }

    public function edit_guru(Guru $data_guru)
    {
        $edit_kelas = Kelas::all();
        return view('admin.Master.biodata_guru.data_guru_edit', compact('data_guru','edit_kelas'));
    }

    public function update_guru(Request $request, Guru $data_guru)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_guru' => 'required',
            'tempat_lahir' => 'required',
            'ttl' => 'required',
            'jabatan' => 'required',
            'agama' => 'required',
            'suku' => 'required',
            'rt_rw' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
        ]);

        //Upload Foto
        $file = $request->file('foto_guru');
        $path = time() . '_' . $request->nama_guru . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Pengajar/' . $path, file_get_contents($file));
       
        
        $data_guru->update([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'no_telp' => $request->no_telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_guru' => $request->alamat_guru,
            'tempat_lahir' =>$request->tempat_lahir,
            'foto_guru' => $request->path,
            'ttl' => $request->ttl,
            'agama' => $request->agama,
            'suku' => $request->suku,
            'rt_rw' => $request->rt_rw,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'kelas_id' => $request->kelas_id,
        ]);
        return Redirect::route('index_guru')->with('success', 'Berhasil edit data guru!!');
        
    }

    public function hapus_guru(Guru $data_guru)
    {
        $data_guru->delete();
        return Redirect::route('index_guru')->with('success', 'Berhasil hapus data guru!!');
    }
    //Generate Excel
    public function eksport_excel_guru()
    {

        return Excel::download(new ExportGuru, "Guru.xlsx");
    }
}
