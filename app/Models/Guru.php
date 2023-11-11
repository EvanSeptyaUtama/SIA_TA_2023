<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\AbsenGuru;
use App\Models\JadwalMengajarGuru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'nip', 'nama_guru','foto_guru', 'no_telp', 'jenis_kelamin', 'alamat_guru', 'tempat_lahir', 'ttl',  'jabatan', 'agama', 'suku', 'rt_rw', 'desa_kelurahan', 'kecamatan', 'kode_pos'
    ];

    //Memiliki banyak absen
    public function absen_guru()
    {
        return $this->hasMany(AbsenGuru::class, 'guru_id', 'kelas_id', 'mata_pelajaran_id');
    }


    //Memiliki 1 wali kelas(guru)() pada suatu kelas
    // public function kelas()
    // {
    //     return $this->belongsTo(Kelas::class);
    // }
}
