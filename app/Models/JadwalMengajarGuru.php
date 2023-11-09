<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMengajarGuru extends Model
{
    use HasFactory;
    protected $table = 'jadwal_mengajar_gurus';
    protected $fillable = [
        'tanggal', 'waktu_mulai', 'waktu_selesai', 'hari', 'kelas_id', 'mata_pelajaran_id', 'guru_id'
    ];

    //Memiliki banyak guru
    public function gurus()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    //Memiliki banyak kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    //Memiliki banyak mata pelajaraan
    public function mata_pelajarans()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
}
