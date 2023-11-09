<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenGuru extends Model
{
    use HasFactory;
    protected $table = 'absen_guru';
    protected $fillable = [
        'tanggal_absen_guru', 'waktu_mulai_guru', 'waktu_selesai_guru', 'keterangan_guru', 'guru_id', 'kelas_id', 'mata_pelajaran_id'
    ];
    protected $dates = ['tanggal_absen_guru', 'waktu_mulai_guru', 'waktu_selesai_guru'];

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
    //Memiliki banyak mata pelajaran
    public function mata_pelajarans()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
}
