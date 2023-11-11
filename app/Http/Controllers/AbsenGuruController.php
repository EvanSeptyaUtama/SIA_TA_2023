<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pengajar;
use App\Models\AbsenGuru;
use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use App\Exports\ExportAbsenGuru;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;

class AbsenGuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index_absen_guru()
    {
        $data_absen_guru = AbsenGuru::all();

        $pengajar = Pengajar::all();
        $kelas = Kelas::all();
        $mata_pelajarans = MataPelajaran::all();

        return view('admin.Absensi.absen_guru.absen_guru', compact('data_absen_guru', 'pengajar', 'kelas', 'mata_pelajarans'));
    }

    public function tampil_absen_guru(AbsenGuru $data_absen_guru)
    {
        return view('admin.Absensi.absen_guru.absen_guru_tampil', compact('data_absen_guru'));
    }

    public function store_absen_guru(Request $request)
    {
        $this->validate($request, array(
            'tanggal_absen_guru' => 'required',
            'waktu_mulai_guru' => 'required',
            'waktu_selesai_guru' => 'required',
            'keterangan_guru' => 'required',
        ));
        AbsenGuru::create([
            'tanggal_absen_guru' => $request->tanggal_absen_guru,
            'waktu_mulai_guru' => $request->waktu_mulai_guru,
            'waktu_selesai_guru' => $request->waktu_selesai_guru,
            'keterangan_guru' => $request->keterangan_guru,
            'pengajar_id' => $request->pengajar_id,
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
        ]);

        return Redirect::route('index_absen_guru')->with('success', 'Berhasil menambahkan absen guru!!');
    }

    public function edit_absen_guru(AbsenGuru $data_absen_guru)
    {
        $edit_pengajar = Pengajar::all();
        $edit_kelas = Kelas::all();
        $edit_mata_pelajaran = MataPelajaran::all();
        return view('admin.Absensi.absen_guru.absen_guru_edit', compact('data_absen_guru', 'edit_pengajar', 'edit_kelas', 'edit_mata_pelajaran'));
    }

    public function update_absen_guru(Request $request, AbsenGuru $data_absen_guru)
    {
        $this->validate($request, array(
            'tanggal_absen_guru' => 'required',
            'waktu_mulai_guru' => 'required',
            'waktu_selesai_guru' => 'required',
            'keterangan_guru' => 'required',

        ));
        $data_absen_guru->update([
            'tanggal_absen_guru' => $request->tanggal_absen_guru,
            'waktu_mulai_guru' => $request->waktu_mulai_guru,
            'waktu_selesai_guru' => $request->waktu_selesai_guru,
            'keterangan_guru' => $request->keterangan_guru,
            'pengajar_id' => $request->pengajar_id,
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
        ]);

        return Redirect::route('index_absen_guru')->with('success', 'Berhasil mengedit data absen guru!!');
    }

    public function hapus_absen_guru(AbsenGuru $data_absen_guru)
    {
        $data_absen_guru->delete();
        return Redirect::route('index_absen_guru')->with('success', 'Berhasil menghapus data absen guru!!');
    }

    //Generate Excel
    public function eksport_excel_absen_guru()
    {

        return Excel::download(new ExportAbsenGuru, "Absen_Guru.xlsx");
    }
}
