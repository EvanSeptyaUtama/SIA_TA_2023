<?php

use App\Models\JadwalMengajarGuru;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\AbsenGuruController;
use App\Http\Controllers\Coba\KotaController;
use App\Http\Controllers\InputDataController;
use App\Http\Controllers\AbsenSiswaController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Coba\ProdukController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\Coba\StudentController;
use App\Models\ProfilInstansi\InformasiAkademik;
use App\Http\Controllers\Coba\KategoriController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\JadwalMengajarController;
use App\Http\Controllers\TahunPelajaranController;
use App\Http\Controllers\JadwalMengajarGuruController;
use App\Models\ProfilInstansi\InformasiPengumumanPPDB;
use App\Http\Controllers\ProfilInstansi\SejarahController;
use App\Http\Controllers\ProfilInstansi\VisiMisiController;
use App\Http\Controllers\ProfilInstansi\AktivitasController;
use App\Http\Controllers\ProfilInstansi\HalamanPPDBController;
use App\Http\Controllers\ProfilInstansi\HalamanUtamaController;
use App\Http\Controllers\ProfilInstansi\ProfilinstansiController;
use App\Http\Controllers\ProfilInstansi\InformasiAkademikController;
use App\Http\Controllers\ProfilInstansi\SusunanOrganisasiController;
use App\Http\Controllers\ProfilInstansi\HalamanInformasiPengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Hak akses PUBLIC
Route::get('/', [ProfilinstansiController::class, 'index_halaman_utama'])->name('halaman_utama');


Route::get('/Penerimaan Peserta Didik Baru', [ProfilinstansiController::class, 'index_halaman_web_ppdb'])->name('index_halaman_web_ppdb');
Auth::routes();

Route::get('/products', [ProductController::class, 'index_product'])->name('index_product');

//Hak Akses ADMIN
Route::middleware(['admin'])->group(function () {
    //WEB - ADMIN
    Route::get('/admin', [SiswaController::class, 'hitung_data_hal_admin'])->name('halaman_utama_admin');

    //Profile
    Route::get('/profile_admin', [ProfileController::class, 'show_profile'])->name('show_profile_admin');
    // Route::get('/edit_profile/{user}', [ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/profile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::delete('/hapus_profile/{user}', [ProfileController::class, 'hapus_admin'])->name('hapus_admin');


    //Pengguna admin
    Route::get('/Pengguna_admin', [ProfileController::class, 'index_user_admin'])->name('index_user_admin');
    Route::get('/edit_pengguna_admin/{data_user_admin}', [ProfileController::class, 'edit_user_admin'])->name('edit_user_admin');
    Route::post('/edit_pengguna_admin/{data_user_admin}', [ProfileController::class, 'update_user_admin'])->name('update_user_admin');

    //Master - Data Siswa
    Route::get('/Data Siswa', [SiswaController::class, 'index_siswa'])->name('index_siswa');
    Route::get('/Export_excel_siswa', [SiswaController::class, 'eksport_excel'])->name('eksport_excel_siswa');
    // Route::post('/Import_excel_siswa', [SiswaController::class, 'import_excel'])->name('import_excel');
    Route::get('/Detail Siswa/{data_siswa}', [SiswaController::class, 'tampil_siswa'])->name('tampil_siswa');
    // Route::get('/Tambah Siswa', [SiswaController::class, 'tambah_siswa'])->name('tambah_siswa');
    Route::post('/Tambah Siswa/store', [SiswaController::class, 'store_siswa'])->name('store_siswa');
    Route::get('/Edit Siswa/{data_siswa}/edit', [SiswaController::class, 'edit_siswa'])->name('edit_siswa');
    Route::patch('/Edit Siswa/{data_siswa}/update', [SiswaController::class, 'update_siswa'])->name('update_siswa');
    Route::delete('/Hapus Siswa/{data_siswa}', [SiswaController::class, 'hapus_siswa'])->name('hapus_siswa');

    //Master - Data Guru
    Route::get('/admin_guru/data_guru', [GuruController::class, 'index_guru'])->name('index_guru');
    Route::get('/Export_guru_excel', [GuruController::class, 'eksport_excel_guru'])->name('eksport_excel_guru');
    // Route::post('/import_guru_excel', [GuruController::class, 'import_guru_excel'])->name('import_guru_excel');
    Route::get('/Tambah Data Guru', [GuruController::class, 'tambah_guru'])->name('tambah_guru');
    Route::post('/Storedata)guru', [GuruController::class, 'store_guru'])->name('store_guru');
    Route::get('/admin_guru/{data_guru}', [GuruController::class, 'tampil_guru'])->name('tampil_guru');
    Route::get('/admin_guru/{data_guru}/edit', [GuruController::class, 'edit_guru'])->name('edit_guru');
    Route::patch('/admin_guru/{data_guru}/update', [GuruController::class, 'update_guru'])->name('update_guru');
    Route::delete('/admin_guru/{data_guru}', [GuruController::class, 'hapus_guru'])->name('hapus_guru');

    //Data Pengajar
    Route::get('/Pengajar', [PengajarController::class,'index_pengajar'])->name('index_pengajar');
    Route::get('/Pengajar_tampil/{data_pengajar}', [PengajarController::class,'tampil_pengajar'])->name('tampil_pengajar');
    Route::post('/Pengajar_store', [PengajarController::class,'store_pengajar'])->name('store_pengajar');
    Route::get('/Pengajar_edit/{data_pengajar}', [PengajarController::class,'edit_pengajar'])->name('edit_pengajar');
    Route::patch('/Pengajar_update/{data_pengajar}', [PengajarController::class,'update_pengajar'])->name('update_pengajar');
    Route::delete('/Pengajar_hapus/{data_pengajar}', [PengajarController::class, 'hapus_pengajar'])->name('hapus_pengajar');
    Route::get('/Export_pengajar_excel', [PengajarController::class, 'eksport_excel_pengajar'])->name('eksport_excel_pengajar');
    //Umum - Data Kelas
    Route::get('/Kelas', [KelasController::class, 'index_kelas'])->name('index_kelas');
    // Route::get('/Tampil_kelas_siswa', [KelasController::class, 'kelas_siswa'])->name('index_kelas_siswa');
    Route::get('/Tampil_kelas/{data_kelas}', [KelasController::class, 'tampil_kelas'])->name('tampil_kelas');
    Route::get('/Tambah_data_kelas', [KelasController::class, 'tambah_kelas'])->name('tambah_kelas');
    Route::post('/Tambah_data_kelas', [KelasController::class, 'store_kelas'])->name('store_kelas');
    Route::get('/Edit_Kelas/{data_kelas}/edit_data_kelas', [KelasController::class, 'edit_kelas'])->name('edit_kelas');
    Route::patch('/Edit_Kelas/{data_kelas}/update', [KelasController::class, 'update_kelas'])->name('update_kelas');
    Route::delete('/Hapus_Kelas/{data_kelas}', [KelasController::class, 'hapus_kelas'])->name('hapus_kelas');

    //Umum - Data Semester
    Route::get('/admin/data_semester', [SemesterController::class, 'index_semester'])->name('index_semester');
    Route::get('/admin/tambah_data_semester', [SemesterController::class, 'tambah_semester'])->name('tambah_semester');
    Route::post('/admin/tambah_data_semester', [SemesterController::class, 'store_semester'])->name('store_semester');
    Route::get('/admin_edit/{data_semester}/edit_data_semester', [SemesterController::class, 'edit_semester'])->name('edit_semester');
    Route::patch('/admin_update/{data_semester}/update_data_semester', [SemesterController::class, 'update_semester'])->name('update_semester');
    Route::delete('/admin_hapus/{data_semester}', [SemesterController::class, 'hapus_semester'])->name('hapus_semester');

    //Umum - Data Tahun Pelajaran
    Route::get('/tahun_pelajaran', [TahunPelajaranController::class, 'index_tahun_pelajaran'])->name('index_tahun_pelajaran');
    Route::get('/tambah_tahun_pelajaran', [TahunPelajaranController::class, 'tambah_tahun_pelajaran'])->name('tambah_tahun_pelajaran');
    Route::post('/store_tahun_pelajaran', [TahunPelajaranController::class, 'store_tahun_pelajaran'])->name('store_tahun_pelajaran');
    Route::get('/edit_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'edit_tahun_pelajaran'])->name('edit_tahun_pelajaran');
    Route::patch('/store_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'update_tahun_pelajaran'])->name('update_tahun_pelajaran');
    Route::delete('/hapus_tahun_pelajaran/{data_tahun_pelajaran}', [TahunPelajaranController::class, 'hapus_tahun_pelajaran'])->name('hapus_tahun_pelajaran');

    //Umum - Data Mata Pelajaran
    Route::get('/admin_mp/data_mata_pelajaran', [MataPelajaranController::class, 'index_mata_pelajaran'])->name('index_mata_pelajaran');
    Route::get('/admin_mp_tambah/tambah_mata_pelajaran', [MataPelajaranController::class, 'tambah_mata_pelajaran'])->name('tambah_mata_pelajaran');
    Route::post('/admin_mp_store/tambah_mata_pelajaran', [MataPelajaranController::class, 'store_mata_pelajaran'])->name('store_mata_pelajaran');
    Route::get('/admin_mp_edit/{data_mata_pelajaran}/edit_mata_pelajaran', [MataPelajaranController::class, 'edit_mata_pelajaran'])->name('edit_mata_pelajaran');
    Route::patch('/admin_mp_update/{data_mata_pelajaran}/update_mata_pelajaran', [MataPelajaranController::class, 'update_mata_pelajaran'])->name('update_mata_pelajaran');
    Route::delete('/admin_mp_hapus/{data_mata_pelajaran}/hapus_mata_pelajaran', [MataPelajaranController::class, 'hapus_mata_pelajaran'])->name('hapus_mata_pelajaran');

    //Profil Instansi - Halaman Utama
    Route::get('/HalamanUtama', [HalamanUtamaController::class, 'index_halaman_utama'])->name('index_halaman_utama');
    Route::get('/HalamanUtama/tambah_halaman_utama', [HalamanUtamaController::class, 'tambah_halaman_utama'])->name('tambah_halaman_utama');
    Route::post('/HalamanUtama/store_halaman_utama', [HalamanUtamaController::class, 'store_halaman_utama'])->name('store_halaman_utama');
    Route::get('/HalamanUtama/{halaman_utama}/edit_halaman_utama', [HalamanUtamaController::class, 'edit_halaman_utama'])->name('edit_halaman_utama');
    Route::patch('/HalamanUtama/{halaman_utama}/update_halaman_utama', [HalamanUtamaController::class, 'update_halaman_utama'])->name('update_halaman_utama');
    Route::get('/HalamanUtama/{halaman_utama}', [HalamanUtamaController::class, 'show_halaman_utama'])->name('show_halaman_utama');
    Route::delete('/HalamanUtama/{halaman_utama}', [HalamanUtamaController::class, 'hapus_halaman_utama'])->name('hapus_halaman_utama');

    //Profil Instansi - Aktivitas Sekolah
    Route::get('/Aktivitas', [AktivitasController::class, 'index_aktivitas'])->name('index_aktivitas'); //halaman admin
    Route::get('/Aktivitas/{data_aktivitas}', [AktivitasController::class, 'tampil_aktivitas'])->name('tampil_aktivitas');
    Route::get('/Tambah_aktivitas', [AktivitasController::class, 'tambah_aktivitas'])->name('tambah_aktivitas');
    Route::post('/Aktivitas/store_aktivitas', [AktivitasController::class, 'store_aktivitas'])->name('store_aktivitas');
    Route::get('/Aktivitas/{data_aktivitas}/edit_aktivitas', [AktivitasController::class, 'edit_aktivitas'])->name('edit_aktivitas');
    Route::patch('/Aktivitas/{data_aktivitas}/update_aktivitas', [AktivitasController::class, 'update_aktivitas'])->name('update_aktivitas');
    Route::delete('/Aktivitas/{data_aktivitas}', [AktivitasController::class, 'hapus_aktivitas'])->name('hapus_aktivitas');

    //Profil Instansi - Sejarah Sekolah
    Route::get('/Sejarah', [SejarahController::class, 'index_sejarah'])->name('index_sejarah'); //halaman admin
    Route::get('/Tampil Sejarah/{data_sejarah}', [SejarahController::class, 'tampil_sejarah'])->name('tampil_sejarah');
    Route::get('/Tambah Sejarah/tambah_sejarah', [SejarahController::class, 'tambah_sejarah'])->name('tambah_sejarah');
    Route::post('/Store Sejarah/store_sejarah', [SejarahController::class, 'store_sejarah'])->name('store_sejarah');
    Route::get('/Edit Sejarah/{data_sejarah}/edit_sejarah', [SejarahController::class, 'edit_sejarah'])->name('edit_sejarah');
    Route::patch('/Update Sejarah/{data_sejarah}/update_sejarah', [SejarahController::class, 'update_sejarah'])->name('update_sejarah');
    Route::delete('/Hapus Sejarah/{data_sejarah}', [SejarahController::class, 'hapus_sejarah'])->name('hapus_sejarah');

    //Profil Instansi - Visi Misi
    Route::get('/VisiMisi', [VisiMisiController::class, 'index_visi_misi'])->name('index_visi_misi'); //halaman admin
    Route::get('/VisiMisi/{data_visi_misi}', [VisiMisiController::class, 'tampil_visi_misi'])->name('tampil_visi_misi');
    Route::get('/Tambah_visi_misi', [VisiMisiController::class, 'tambah_visi_misi'])->name('tambah_visi_misi');
    Route::post('/VisiMisi/store_visi_misi', [VisiMisiController::class, 'store_visi_misi'])->name('store_visi_misi');
    Route::get('/VisiMisi/{data_visi_misi}/edit_visi_misi', [VisiMisiController::class, 'edit_visi_misi'])->name('edit_visi_misi');
    Route::patch('/VisiMisi/{data_visi_misi}/update_visi_misi', [VisiMisiController::class, 'update_visi_misi'])->name('update_visi_misi');
    Route::delete('/VisiMisi/{data_visi_misi}', [VisiMisiController::class, 'hapus_visi_misi'])->name('hapus_visi_misi');

    //Profil Instansi - Susunan Organisasi
    Route::get('/SusunanOrganisasi', [SusunanOrganisasiController::class, 'index_susunan_organisasi'])->name('index_susunan_organisasi'); //halaman admin
    Route::get('/SusunanOrganisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'tampil_susunan_organisasi'])->name('tampil_susunan_organisasi');
    Route::get('/Tambah_Susunan_Organisasi', [SusunanOrganisasiController::class, 'tambah_susunan_organisasi'])->name('tambah_susunan_organisasi');
    Route::post('/Store_Susunan_Organisasi', [SusunanOrganisasiController::class, 'store_susunan_organisasi'])->name('store_susunan_organisasi');
    Route::get('/Edit_Susunan_Organisasi/{data_susunan_organisasi}/edit_susunan_organisasi', [SusunanOrganisasiController::class, 'edit_susunan_organisasi'])->name('edit_susunan_organisasi');
    Route::patch('/Update_Susunan_Organisasi/{data_susunan_organisasi}/update_susunan_organisasi', [SusunanOrganisasiController::class, 'update_susunan_organisasi'])->name('update_susunan_organisasi');
    Route::delete('/Hapus_Susunan_Organisasi/{data_susunan_organisasi}', [SusunanOrganisasiController::class, 'hapus_susunan_organisasi'])->name('hapus_susunan_organisasi');

    //Profil Instansi - Informasi Akademik
    Route::get('/Informasi_Akademik', [InformasiAkademikController::class, 'index_informasi_akademik'])->name('index_informasi_akademik'); //halaman admin
    Route::get('/Tampil_Informasi_Akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'tampil_informasi_akademik'])->name('tampil_informasi_akademik');
    Route::get('/Tambah_Informasi_Akademik', [InformasiAkademikController::class, 'tambah_informasi_akademik'])->name('tambah_informasi_akademik');
    Route::post('/Store_Informasi_Akademik', [InformasiAkademikController::class, 'store_informasi_akademik'])->name('store_informasi_akademik');
    Route::get('/Edit_Informasi_Akademik/{data_informasi_akademik}/edit_susunan_organisasi', [InformasiAkademikController::class, 'edit_informasi_akademik'])->name('edit_informasi_akademik');
    Route::patch('/Informasi_Akademik/{data_informasi_akademik}/update_susunan_organisasi', [InformasiAkademikController::class, 'update_informasi_akademik'])->name('update_informasi_akademik');
    Route::delete('/Hapus_Informasi_Akademik/{data_informasi_akademik}', [InformasiAkademikController::class, 'hapus_informasi_akademik'])->name('hapus_informasi_akademik');

    //Halaman Brosur PPDB
    Route::get('/Halaman_PPDB', [HalamanPPDBController::class, 'index_halaman_ppdb'])->name('index_halaman_ppdb');
    Route::get('/Halaman_PPDB/{data_ppdb}', [HalamanPPDBController::class, 'tampil_halaman_ppdb'])->name('tampil_halaman_ppdb');
    Route::get('/Tambah_PPDB', [HalamanPPDBController::class, 'tambah_halaman_ppdb'])->name('tambah_halaman_ppdb');
    Route::post('/Store_PPDB', [HalamanPPDBController::class, 'store_halaman_ppdb'])->name('store_halaman_ppdb');
    Route::get('/Edit_PPDB/{data_ppdb}/Edit', [HalamanPPDBController::class, 'edit_halaman_ppdb'])->name('edit_halaman_ppdb');
    Route::patch('/Update_PPDB/{data_ppdb}/update', [HalamanPPDBController::class, 'update_halaman_ppdb'])->name('update_halaman_ppdb');
    Route::delete('/Hapus_PPDB/{data_ppdb}/hapus', [HalamanPPDBController::class, 'hapus_halaman_ppdb'])->name('hapus_halaman_ppdb');

    //Halaman Pengumuman PPDB
    Route::get('/Informasi_Pengumuman', [HalamanInformasiPengumumanController::class, 'index_halaman_ip_ppdb'])->name('index_halaman_ip_ppdb');
    Route::get('/Tampil Informasi Pengumuman/{data_ip_ppdb}', [HalamanInformasiPengumumanController::class, 'tampil_halaman_ip_ppdb'])->name('tampil_halaman_ip_ppdb');
    Route::get('/Tambah Informasi Pengumuman', [HalamanInformasiPengumumanController::class, 'tambah_halaman_ip_ppdb'])->name('tambah_halaman_ip_ppdb');
    Route::post('/Store Informasi Pengumuman', [HalamanInformasiPengumumanController::class, 'store_halaman_ip_ppdb'])->name('store_halaman_ip_ppdb');
    Route::get('/Edit Informasi Pengumuman/{data_ip_ppdb}/Edit', [HalamanInformasiPengumumanController::class, 'edit_halaman_ip_ppdb'])->name('edit_halaman_ip_ppdb');
    Route::patch('/Update Informasi Pengumuman/{data_ip_ppdb}/update', [HalamanInformasiPengumumanController::class, 'update_halaman_ip_ppdb'])->name('update_halaman_ip_ppdb');
    Route::delete('/Hapus Informasi Pengumuman/{data_ip_ppdb}/hapus', [HalamanInformasiPengumumanController::class, 'hapus_halaman_ip_ppdb'])->name('hapus_halaman_ip_ppdb');

    //Absen Siswa
    Route::get('/Absen_Siswa', [AbsenSiswaController::class, 'index_absen_siswa'])->name('index_absen_siswa'); //halaman admin
    Route::get('/Absen_Siswa/{data_absen_siswa}/Detail_Absen', [AbsenSiswaController::class, 'tampil_absen_siswa'])->name('tampil_absen_siswa');
    Route::post('/Absen_Siswa/tambah', [AbsenSiswaController::class, 'store_absen_siswa'])->name('store_absen_siswa');
    Route::get('/Edit_Absen_Siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'edit_absen_siswa'])->name('edit_absen_siswa');
    Route::patch('/Update_Absen_Siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'update_absen_siswa'])->name('update_absen_siswa');
    Route::delete('/Hapus_Absen_Siswa/{data_absen_siswa}', [AbsenSiswaController::class, 'hapus_absen_siswa'])->name('hapus_absen_siswa');
    //Absen Siswa - Laporan Harian
    Route::get('/Laporan_Harian_Absen_kelas_1', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_1'])->name('laporan_harian_absen_siswa_kelas_1');
    Route::get('/Export_excel_absen_kelas_1', [AbsenSiswaController::class, 'eksport_excel_kelas_1'])->name('eksport_excel_kelas_1');
    Route::get('/Laporan_Harian_Absen_kelas_2', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_2'])->name('laporan_harian_absen_siswa_kelas_2');
    Route::get('/Export_excel_absen_kelas_2', [AbsenSiswaController::class, 'eksport_excel_kelas_2'])->name('eksport_excel_kelas_2');
    Route::get('/Laporan_Harian_Absen_kelas_3', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_3'])->name('laporan_harian_absen_siswa_kelas_3');
    Route::get('/Export_excel_absen_kelas_3', [AbsenSiswaController::class, 'eksport_excel_kelas_3'])->name('eksport_excel_kelas_3');
    Route::get('/Laporan_Harian_Absen_kelas_4', [AbsenSiswaController::class, 'laporan_harian_absen_siswa_kelas_4'])->name('laporan_harian_absen_siswa_kelas_4');
    Route::get('/Export_excel_absen_kelas_4', [AbsenSiswaController::class, 'eksport_excel_kelas_4'])->name('eksport_excel_kelas_4');

    //Absen Guru
    Route::get('/Absen_Guru', [AbsenGuruController::class, 'index_absen_guru'])->name('index_absen_guru'); //halaman admin
    Route::get('/Export_excel_absen_guru', [AbsenGuruController::class, 'eksport_excel_absen_guru'])->name('eksport_excel_absen_guru');
    Route::get('/Absen_Guru/{data_absen_guru}/Detail_Absen', [AbsenGuruController::class, 'tampil_absen_guru'])->name('tampil_absen_guru');
    Route::post('/Absen_Guru/tambah', [AbsenGuruController::class, 'store_absen_guru'])->name('store_absen_guru');
    Route::get('/Absen_Guru/{data_absen_guru}', [AbsenGuruController::class, 'edit_absen_guru'])->name('edit_absen_guru');
    Route::patch('/Absen_Guru/{data_absen_guru}', [AbsenGuruController::class, 'update_absen_guru'])->name('update_absen_guru');
    Route::delete('/Absen_Guru/{data_absen_guru}', [AbsenGuruController::class, 'hapus_absen_guru'])->name('hapus_absen_guru');

    //Jadwal Mengajar Guru
    Route::get('/Jadwal_Mengajar_Guru', [JadwalMengajarGuruController::class, 'index_jadwal_mengajar_guru'])->name('index_jadwal_mengajar_guru');
    Route::get('/Export_excel_jadwal_mengajar', [JadwalMengajarGuruController::class, 'eksport_excel_jadwal_mengajar_guru'])->name('eksport_excel_jadwal_mengajar_guru');
    Route::get('/Tampil Jadwal Mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'tampil_jadwal_mengajar_guru'])->name('tampil_jadwal_mengajar_guru');
    Route::get('/Tambah Jadwal Mengajar', [JadwalMengajarGuruController::class, 'tambah_jadwal_mengajar_guru'])->name('tambah_jadwal_mengajar_guru');
    Route::post('/Tambah Jadwal Mengajar', [JadwalMengajarGuruController::class, 'store_jadwal_mengajar_guru'])->name('store_jadwal_mengajar_guru');
    Route::get('/Edit_Jadwal_Mengajar/{data_jadwal_mengajar_guru}/Edit', [JadwalMengajarGuruController::class, 'edit_jadwal_mengajar_guru'])->name('edit_jadwal_mengajar_guru');
    Route::patch('/Edit Jadwal Mengajar/{data_jadwal_mengajar_guru}/Proses', [JadwalMengajarGuruController::class, 'update_jadwal_mengajar_guru'])->name('update_jadwal_mengajar_guru');
    Route::delete('Hapus Jadwal Mengajar/{data_jadwal_mengajar_guru}', [JadwalMengajarGuruController::class, 'hapus_jadwal_mengajar_guru'])->name('hapus_jadwal_mengajar_guru');

    //Coba (Belajar Relasi One to Many)
    //coba - Category
    Route::get('/kategori', [KategoriController::class, 'index_kategori'])->name('index_kategori');
    Route::get('/tampil_kategori/{data_kategori}', [KategoriController::class, 'tampil_kategori'])->name('tampil_kategori');
    Route::get('/tambah_kategori', [KategoriController::class, 'tambah_kategori'])->name('tambah_kategori');
    Route::post('/store_kategori', [KategoriController::class, 'store_kategori'])->name('store_kategori');
    Route::get('/edit_kategori/{data_kategori}', [KategoriController::class, 'edit_kategori'])->name('edit_kategori');
    Route::patch('/update_kategori/{data_kategori}', [KategoriController::class, 'update_kategori'])->name('update_kategori');
    Route::delete('hapus_kategori/{data_kategori}', [KategoriController::class, 'hapus_kategori'])->name('hapus_kategori');

    //coba - Produk
    Route::get('/produk', [ProdukController::class, 'index_produk'])->name('index_produk');
    Route::get('/tampil_produk/{data_produk}', [ProdukController::class, 'tampil_produk'])->name('tampil_produk');
    Route::get('/tambah_produk', [ProdukController::class, 'tambah_produk'])->name('tambah_produk');
    Route::post('/store_produk', [ProdukController::class, 'store_produk'])->name('store_produk');
    Route::get('/edit_produk/{data_produk}', [ProdukController::class, 'edit_produk'])->name('edit_produk');
    Route::patch('/update_produk/{data_produk}', [ProdukController::class, 'update_produk'])->name('update_produk');
    Route::delete('hapus_produk/{data_produk}', [ProdukController::class, 'hapus_produk'])->name('hapus_produk');


    //coba - query builder di folder produk
    Route::get('/Student', [StudentController::class, 'index_student'])->name('index_student');
    // Route::get('/Buat_student', [StudentController::class, 'create_student'])->name('create_student');
    Route::post('/Buat_student', [StudentController::class, 'store_student'])->name('store_student');
    Route::get('/Edit/{student}', [StudentController::class, 'edit_student'])->name('edit_student');
    Route::patch('/Edit_student/{student}', [StudentController::class, 'update_student'])->name('update_student');
    Route::delete('/Hapus/{student}', [StudentController::class, 'hapus_student'])->name('hapus_student');

    //coba - Kota
    Route::get('/kota', [KotaController::class, 'index_kota'])->name('index_kota');
    Route::get('/tampil_kota/{tampil_kota}', [KotaController::class, 'tampil_kota'])->name('tampil_kota');
    Route::get('/tambah_kota', [KotaController::class, 'tambah_kota'])->name('tambah_kota');
    Route::post('/store_kota', [KotaController::class, 'store_kota'])->name('store_kota');
    Route::get('/edit_kota/{edit_kota}', [KotaController::class, 'edit_kota'])->name('edit_kota');
    Route::patch('/update_kota/{update_kota}', [KotaController::class, 'update_kota'])->name('update_kota');
    Route::delete('hapus_kota/{hapus_kota}', [KotaController::class, 'hapus_kota'])->name('hapus_kota');

    //coba - Kehadiran (Attendance)
    Route::get('/Kehadiran', [AttendanceController::class, 'index'])->name('index_kehadiran');
    Route::post('/Kehadiran', [AttendanceController::class, 'store_kehadiran'])->name('store_kehadiran');

    //Data Product
    Route::get('/product/create', [ProductController::class, 'create_product'])->name('create_product');
    Route::post('/product/create', [ProductController::class, 'store_product'])->name('store_product');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit_product'])->name('edit_product');
    Route::patch('/product/{product}/update', [ProductController::class, 'update_product'])->name('update_product');
    Route::delete('/product/{product}', [ProductController::class, 'delete_product'])->name('delete_product');
    Route::post('/order/{order}/confirm', [OrderController::class, 'confirm_payment'])->name('confirm_payment');
});


//Hak Akses Absen
Route::middleware(['pengajar'])->group(function () {
    //WEB - ADMIN
    Route::get('/absen', function () {
        return view('absen/Halaman_absen');
    });

    //////////////////////////////
    Route::get('/product/{product}', [ProductController::class, 'show_product'])->name('show_product');
    Route::post('/cart/{product}', [CartController::class, 'add_to_cart'])->name('add_to_cart');
    Route::get('/cart', [CartController::class, 'show_cart'])->name('show_cart');
    Route::patch('/cart/{cart}', [CartController::class, 'update_cart'])->name('update_cart');
    Route::delete('/cart/{cart}', [CartController::class, 'delete_cart'])->name('delete_cart');
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/order', [OrderController::class, 'index_order'])->name('index_order');
    Route::get('/order/{order}', [OrderController::class, 'show_order'])->name('show_order');
    Route::post('/order/{order}/pay', [OrderController::class, 'submit_payment_receipt'])->name('submit_payment_receipt');
    Route::get('/profile', [ProfileController::class, 'show_profile'])->name('show_profile');
});
