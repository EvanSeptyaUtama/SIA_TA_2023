<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\AbsenSiswa;
use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use App\Models\TahunPelajaran;
use App\Imports\AbsenSiswa\Kelas1;
use Illuminate\Support\Facades\DB;
use App\Exports\Kelas\ExportKelas1;
use App\Exports\Kelas\ExportKelas2;
use App\Exports\Kelas\ExportKelas3;
use App\Exports\Kelas\ExportKelas4;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Redirect;

class AbsenSiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index_absen_siswa()
    {
        $kelas = Kelas::all();
        $siswas = Siswa::all();
        $tahun_pelajarans = TahunPelajaran::all();
        $data_absen_siswa = AbsenSiswa::with('siswas','kelas','tahun_pelajarans')->get();
        return view('admin.Absensi.absen_siswa.absen_siswa', compact('data_absen_siswa', 'kelas', 'siswas', 'tahun_pelajarans'));
    }

    public function tampil_absen_siswa(AbsenSiswa $data_absen_siswa)
    {

        return view('admin.Absensi.absen_siswa.absen_siswa_tampil', compact('data_absen_siswa'));
    }


    public function store_absen_siswa(Request $request, AbsenSiswa $data_absen_siswa)
    {
        $this->validate($request, array(
            'tanggal_absen' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'keterangan' => 'required',
        ));
        $data_absen_siswa->create([
            'tanggal_absen' => $request->tanggal_absen,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'keterangan' => $request->keterangan,
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'tahun_pelajaran_id' => $request->tahun_pelajaran_id,
        ]);

        return Redirect::route('index_absen_siswa')->with('success', 'Berhasil menambahkan data absen siswa!!');
    }

    public function edit_absen_siswa(AbsenSiswa $data_absen_siswa)
    {
        $edit_siswa = Siswa::all();
        $edit_kelas = Kelas::all();
        $edit_tahun_pelajaran = TahunPelajaran::all();
        // $mata_pelajarans = MataPelajaran::all();
        return view('admin.Absensi.absen_siswa.absen_siswa_edit', compact('data_absen_siswa', 'edit_siswa', 'edit_kelas', 'edit_tahun_pelajaran'));
    }

    public function update_absen_siswa(Request $request, AbsenSiswa $data_absen_siswa)
    {
        $this->validate($request, array(
            'tanggal_absen' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'keterangan' => 'required',
        ));
        $data_absen_siswa->update([
            'tanggal_absen' => $request->tanggal_absen,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'keterangan' => $request->keterangan,
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'tahun_pelajaran_id' => $request->tahun_pelajaran_id,
        ]);

        return Redirect::route('index_absen_siswa')->with('success', 'Berhasil mengedit data absen siswa!!');
    }

    public function hapus_absen_siswa(AbsenSiswa $data_absen_siswa)
    {
        $data_absen_siswa->delete();
        return Redirect::route('index_absen_siswa')->with('success', 'Berhasil menghapus data absen!!');
    }

    //Laporan harian absen berdasarkan kelas1
    public function laporan_harian_absen_siswa_kelas_1()
    {

        //Menghitung jumlah absen susuai keterangan
        $kelas = Kelas::all();
        $siswas = Siswa::all();
        $tahun_pelajarans = TahunPelajaran::all();
        $data_absen_siswa = AbsenSiswa::all();
        return view('admin.Absensi.absen_siswa.kelas.kelas_1', compact('data_absen_siswa', 'kelas', 'siswas',  'tahun_pelajarans'));
    }

    //Generate Excel
    public function eksport_excel_kelas_1()
    {

        return Excel::download(new ExportKelas1, "Absen_siswa_kelas_1.xlsx");
    }

    //Laporan harian absen berdasarkan kelas2
    public function laporan_harian_absen_siswa_kelas_2()
    {
        $kelas = Kelas::all();
        $siswas = Siswa::all();
        $tahun_pelajarans = TahunPelajaran::all();
        $data_absen_siswa = AbsenSiswa::all();
        return view('admin.Absensi.absen_siswa.kelas.kelas_2', compact('data_absen_siswa', 'kelas', 'siswas', 'tahun_pelajarans'));
    }

    //Generate Excel
    public function eksport_excel_kelas_2()
    {
        return Excel::download(new ExportKelas2, "Absen_siswa_kelas_2.xlsx");
    }

    //Laporan harian absen berdasarkan kelas3
    public function laporan_harian_absen_siswa_kelas_3()
    {

        $siswas = Siswa::all();
        $kelas = Kelas::all();
        $tahun_pelajarans = TahunPelajaran::all();
        $data_absen_siswa = AbsenSiswa::all();
        return view('admin.Absensi.absen_siswa.kelas.kelas_3', compact('data_absen_siswa', 'siswas', 'kelas',  'tahun_pelajarans'));
    }

    //Generate Excel
    public function eksport_excel_kelas_3()
    {

        return Excel::download(new ExportKelas3, "Absen_siswa_kelas_3.xlsx");
    }

    //Laporan harian absen berdasarkan kelas4
    public function laporan_harian_absen_siswa_kelas_4()
    {

        $siswas = Siswa::all();
        $kelas = Kelas::all();
        $tahun_pelajarans = TahunPelajaran::all();
        $data_absen_siswa = AbsenSiswa::all();
        return view('admin.Absensi.absen_siswa.kelas.kelas_4', compact('data_absen_siswa', 'siswas', 'kelas', 'tahun_pelajarans'));
    }

    //Generate Excel
    public function eksport_excel_kelas_4()
    {

        return Excel::download(new ExportKelas4, "Absen_siswa_kelas_4.xlsx");
    }
}
