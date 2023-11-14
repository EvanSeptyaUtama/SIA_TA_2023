<?php

namespace App\Http\Controllers;

use App\Exports\ExportAbsenGuru;
use App\Models\AbsenGuru;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AbsenGuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_absen_guru()
    {
        $data_absen_guru = AbsenGuru::all();

        $gurus = Guru::all();
        $kelas = Kelas::all();
        $mata_pelajarans = MataPelajaran::all();

        return view('admin.Absensi.absen_guru.absen_guru', compact('data_absen_guru', 'gurus', 'kelas', 'mata_pelajarans'));
    }

    public function index_rekap_absen_guru()
    {
        $rekapAbsensi = [];
        $tanggalFormatted = null;

        return view('admin.Absensi.absen_guru.rekap_guru', compact('rekapAbsensi', 'tanggalFormatted'));
    }

    public function rekap_absen_guru(Request $request)
    {        
        $tanggal_hari_ini = Carbon::now()->format('Y-m-d');
        $request->validate([
            'tanggal_awal' => 'required|date',
        ]);

        // Tentukan rentang waktu dari input user
        $tanggal_awal = $request->input('tanggal_awal');

        $tanggal = Carbon::createFromFormat('Y-m-d', $tanggal_awal);

        $tanggalFormatted = $tanggal->isoFormat('D MMMM YYYY');

        $rekapAbsensi = $this->get_rekap_absen_guru($tanggal_awal, $tanggal_hari_ini);

        return view('admin.Absensi.absen_guru.rekap_guru', compact('rekapAbsensi', 'tanggalFormatted'))->with('success', 'Berhasil menampilkan data rekap absensi!!');
    }

    private function get_rekap_absen_guru($tanggal_awal, $tanggal_akhir)
    {
        $rekapAbsensi = DB::table('gurus')
            ->select(
                'gurus.id',
                'gurus.nip',
                'gurus.nama_guru',
                DB::raw(('COUNT(absen_guru.id) as jumlah_absensi')),
                DB::raw('SUM(CASE WHEN absen_guru.keterangan_guru = "Hadir" THEN 1 ELSE 0 END) as jumlah_hadir'),
                DB::raw('SUM(CASE WHEN absen_guru.keterangan_guru = "Sakit" THEN 1 ELSE 0 END) as jumlah_sakit'),
                DB::raw('SUM(CASE WHEN absen_guru.keterangan_guru = "Izin" THEN 1 ELSE 0 END) as jumlah_ijin'),
                DB::raw('SUM(CASE WHEN absen_guru.keterangan_guru = "Hadir" THEN 1 ELSE 0 END) / COUNT(absen_guru.id) * 100 as persentase_kehadiran')
            )
            ->leftJoin('absen_guru', 'gurus.id', '=', 'absen_guru.guru_id')
            ->where(function ($query) use ($tanggal_awal, $tanggal_akhir) {
                $query->whereBetween('absen_guru.tanggal_absen_guru', [$tanggal_awal, $tanggal_akhir])
                    ->orWhereNull('absen_guru.guru_id');
            })
            ->groupBy('gurus.id', 'gurus.nip', 'gurus.nama_guru')
            ->get();

        return $rekapAbsensi;
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
            'guru_id' => $request->guru_id,
            'kelas_id' => $request->kelas_id,
            'mata_pelajaran_id' => $request->mata_pelajaran_id,
        ]);

        return Redirect::route('index_absen_guru')->with('success', 'Berhasil melakukan absen!!');
    }

    public function edit_absen_guru(AbsenGuru $data_absen_guru)
    {
        $edit_guru = Guru::all();
        $edit_kelas = Kelas::all();
        $edit_mata_pelajaran = MataPelajaran::all();
        return view('admin.Absensi.absen_guru.absen_guru_edit', compact('data_absen_guru', 'edit_guru', 'edit_kelas', 'edit_mata_pelajaran'));
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
            'guru_id' => $request->guru_id,
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
