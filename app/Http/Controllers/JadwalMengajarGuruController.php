<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kelas;
use App\Models\Pengajar;
use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use App\Models\JadwalMengajarGuru;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;
use App\Exports\ExportJadwalMengajarGuru;

class JadwalMengajarGuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Tampilan seluruh daftar mengajar guru
    public function index_jadwal_mengajar_guru()
    {
        $data_jadwal_mengajar_guru = JadwalMengajarGuru::all();
        return view('admin.Jadwal_Mengajar.jadwal_mengajar', compact('data_jadwal_mengajar_guru'));
    }



    //Menampilkan detail jadwal mengajar guru
    public function tampil_jadwal_mengajar_guru(JadwalMengajarGuru $data_jadwal_mengajar_guru)
    {
        $edit_pengajar = Pengajar::all();
        $edit_kelas = Kelas::all();
        $edit_mapel = MataPelajaran::all();
        return view('admin.Jadwal_Mengajar.jadwal_mengajar_tampil', compact('data_jadwal_mengajar_guru', 'edit_kelas', 'edit_mapel','edit_pengajar'));
    }

    //Menambahkan jadwal mengajar guru
    public function tambah_jadwal_mengajar_guru()
    {
        $tambah_kelas = Kelas::all();
        $tambah_pengajar = Pengajar::all();
        $tambah_mapel = MataPelajaran::all();
        return view('admin.Jadwal_Mengajar.jadwal_mengajar_tambah', compact('tambah_kelas', 'tambah_mapel','tambah_pengajar'));
    }
    //Proses menambahkan jadwal mengajar guru
    public function store_jadwal_mengajar_guru(Request $request)
    {
        $this->validate($request, array(
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'hari' => 'required',
        ));

       JadwalMengajarGuru::create([
        'tanggal' => $request->tanggal,
        'waktu_mulai' => $request->waktu_mulai,
        'waktu_selesai' => $request->waktu_selesai,
        'hari' => $request->hari,
        'kelas_id' => $request->kelas_id,
        'mata_pelajaran_id' => $request->mata_pelajaran_id,
        'pengajar_id' => $request->pengajar_id,
       ]);

        return Redirect::route('index_jadwal_mengajar_guru')
            ->with('success', 'Berhasil menambahkan jadwal mengajar!!');
    }

    //Menambahkan jadwal mengajar guru
    public function edit_jadwal_mengajar_guru(JadwalMengajarGuru $data_jadwal_mengajar_guru)
    {

        $edit_pengajar = Pengajar::all();
        $edit_kelas = Kelas::all();
        $edit_mapel = MataPelajaran::all();
        return view('admin.Jadwal_Mengajar.jadwal_mengajar_edit', compact('data_jadwal_mengajar_guru', 'edit_kelas', 'edit_mapel','edit_pengajar'));
    }

    public function update_jadwal_mengajar_guru(Request $request, JadwalMengajarGuru $data_jadwal_mengajar_guru)
    {
        //Validasi
        $this->validate($request, array(
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'hari' => 'required',
        ));
        //bagian proses edit data
        $data_jadwal_mengajar_guru->update([
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'hari' => $request->hari,
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
            'pengajar_id' => $request->pengajar_id,
        ]);


        return Redirect::route('index_jadwal_mengajar_guru')
            ->with('success', 'Berhasil mengedit jadwal mengajar!!');
    }

    public function hapus_jadwal_mengajar_guru(JadwalMengajarGuru $data_jadwal_mengajar_guru)
    {
        $data_jadwal_mengajar_guru->delete();
        return Redirect::route('index_jadwal_mengajar_guru')->with('success', 'Berhasil menghapus data jadwal mengajar guru!!');
    }

    //Generate Excel
    public function eksport_excel_jadwal_mengajar_guru()
    {

        return Excel::download(new ExportJadwalMengajarGuru, "Jadwal_Mengajar_Guru.xlsx");
    }
}
