<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'nama_kelas'
    ];

    //Memiliki banyak absen
    public function absen_siswa()
    {
        return $this->hasMany(AbsenSiswa::class, 'siswa_id', 'kelas_id', 'tahun_pelajaran_id');
    }

    //Memiliki banyak jadwal mengajar guru
    public function jadwal_mengajar_guru()
    {
        return $this->hasMany(JadwalMengajarGuru::class, 'kelas_id', 'mata_pelajaran_id', 'guru_id');
    }

    //Memiliki banyak absen
    public function absen_guru()
    {
        return $this->hasMany(AbsenGuru::class, 'guru_id', 'kelas_id', 'mata_pelajaran_id');
    }

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'kelas_id','id');
    }

    public function gurus()
    {
        return $this->hasOne(Guru::class, 'kelas_id','id');
    }
}
