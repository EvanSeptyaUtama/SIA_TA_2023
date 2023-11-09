<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Exports\ExportSiswa;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Menghitung jumlah data siswa dan data pengajar secara keseluruhan
    public function hitung_data_hal_admin()
    {
        $hitung_siswa = Siswa::all()->count();
        $hitung_pengajar = Guru::all()->count();
        return view('admin.DashboardLayout', compact('hitung_siswa', 'hitung_pengajar'));
    }

    public function index_siswa(Request $request)
    {
        $data_kelas = Kelas::all();
        $data_siswa = Siswa::all();
        return view('admin.Master.biodata_siswa.data_siswa', compact('data_siswa','data_kelas'));
    }


    public function tambah_siswa()
    {
        return view('admin.Master.biodata_siswa.data_siswa_tambah');
    }
    public function store_siswa(Request $request)
    {
        //Validasi
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'alamat_siswa' => 'required',
            'tempat_lahir' => 'required',
            'foto_siswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'suku' => 'required',
            'jumlah_saudara' => 'required',
            'cita_cita' => 'required',
            'hobi' => 'required',
            'no_telp' => 'required',
            'tinggal_bersama' => 'required',
            'rt_rw' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
        ]);

        $file = $request->file('foto_siswa');
        $path = time() . '_' . $request->nama_siswa . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Siswa/' . $path, file_get_contents($file));

        Siswa::create([
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'alamat_siswa' => $request->alamat_siswa,
            'tempat_lahir' => $request->tempat_lahir,
            'ttl' => $request->ttl,
            'foto_siswa' => $path,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'suku' => $request->suku,
            'jumlah_saudara' => $request->jumlah_saudara,
            'cita_cita' => $request->cita_cita,
            'hobi' => $request->hobi,
            'no_telp' => $request->no_telp,
            'tinggal_bersama' => $request->tinggal_bersama,
            'rt_rw' => $request->rt_rw,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'kelas_id' => $request->kelas_id,
        ]);

        return Redirect::route('index_siswa')
            ->with('success', 'Berhasil menambahkan data siswa!!');
    }

    public function tampil_siswa(Siswa $data_siswa)
    {
        return view('admin.Master.biodata_siswa.data_siswa_tampil', compact('data_siswa'));
    }
    public function edit_siswa(Siswa $data_siswa)
    {
        $edit_kelas = Kelas::all();
        return view('admin.Master.biodata_siswa.data_siswa_edit', compact('data_siswa','edit_kelas'));
    }

    public function update_siswa(Request $request, Siswa $data_siswa)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'alamat_siswa' => 'required',
            'tempat_lahir' => 'required',
            'foto_siswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'anak_ke' => 'required',
            'suku' => 'required',
            'jumlah_saudara' => 'required',
            'cita_cita' => 'required',
            'hobi' => 'required',
            'no_telp' => 'required',
            'tinggal_bersama' => 'required',
            'rt_rw' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            
        ]);

        $file = $request->file('foto_siswa');
        $path = time() . '_' . $request->nama_siswa . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/Siswa/' . $path, file_get_contents($file));

        $data_siswa->update([
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
            'alamat_siswa' => $request->alamat_siswa,
            'tempat_lahir' => $request->tempat_lahir,
            'ttl' => $request->ttl,
            'foto_siswa' => $path,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'suku' => $request->suku,
            'jumlah_saudara' => $request->jumlah_saudara,
            'cita_cita' => $request->cita_cita,
            'hobi' => $request->hobi,
            'no_telp' => $request->no_telp,
            'tinggal_bersama' => $request->tinggal_bersama,
            'rt_rw' => $request->rt_rw,
            'desa_kelurahan' => $request->desa_kelurahan,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'kelas_id' => $request->kelas_id,
        ]);

        return Redirect::route('index_siswa')
            ->with('success', 'Berhasil edit data siswa!!');
    }
    public function hapus_siswa(Siswa $data_siswa)
    {
        $data_siswa->delete();
        return Redirect::route('index_siswa')->with('success', 'Berhasil hapus data siswa!!');
    }

    //Generate Excel
    public function eksport_excel()
    {
        return Excel::download(new ExportSiswa, "Siswa.xlsx");
    }
}
