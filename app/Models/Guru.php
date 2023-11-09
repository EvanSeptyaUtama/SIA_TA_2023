<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'nip', 'nama_guru', 'no_telp', 'jenis_kelamin', 'alamat_guru', 'tempat_lahir', 'ttl', 'foto_guru', 'jabatan', 'agama', 'suku', 'rt_rw', 'desa_kelurahan', 'kecamatan', 'kode_pos','kelas_id'
    ];

    //Memiliki banyak absen
    public function absen_guru()
    {
        return $this->hasMany(AbsenGuru::class, 'guru_id', 'kelas_id', 'mata_pelajaran_id');
    }

    //Memiliki banyak jadwal mengajar guru
    public function jadwal_mengajar_guru()
    {
        return $this->hasMany(JadwalMengajarGuru::class, 'guru_id', 'kelas_id', 'mata_pelajaran_id');
    }

    //Memiliki 1 wali kelas(guru)() pada suatu kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
