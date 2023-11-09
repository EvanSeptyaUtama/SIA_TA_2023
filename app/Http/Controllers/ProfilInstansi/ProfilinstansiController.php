<?php

namespace App\Http\Controllers\ProfilInstansi;

use App\Http\Controllers\Controller;
use App\Models\ProfilInstansi\Aktivitas;
use Illuminate\Http\Request;
use App\Models\ProfilInstansi\HalamanUtama;
use App\Models\ProfilInstansi\InformasiAkademik;
use App\Models\ProfilInstansi\InformasiPengumumanPPDB;
use App\Models\ProfilInstansi\PPDB;
use App\Models\ProfilInstansi\Sejarah;
use App\Models\ProfilInstansi\SusunanOrganisasi;
use App\Models\ProfilInstansi\Visi_Misi;
use Illuminate\Support\Facades\Auth;

class ProfilinstansiController extends Controller
{


    public function index_halaman_utama()
    {

        $data_hal_utama = HalamanUtama::all();
        $data_hal_aktivitas = Aktivitas::all();
        $data_hal_sejarah = Sejarah::all();
        $data_hal_visi_misi = Visi_Misi::all();
        $data_hal_susunan_organisasi = SusunanOrganisasi::all();
        $data_hal_informasi_akademik = InformasiAkademik::all();

        return view('halaman_utama', compact('data_hal_utama', 'data_hal_aktivitas', 'data_hal_sejarah', 'data_hal_visi_misi', 'data_hal_susunan_organisasi', 'data_hal_informasi_akademik'));
    }
    public function index_halaman_web_ppdb()
    {
        $data_hal_ppdb = PPDB::all();
        $data_hal_ip_ppdb = InformasiPengumumanPPDB::all();
        return view('layouts.app_ppdb', compact('data_hal_ppdb', 'data_hal_ip_ppdb'));
    }
}
