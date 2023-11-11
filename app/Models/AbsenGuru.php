<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Pengajar;
use App\Models\MataPelajaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbsenGuru extends Model
{
    use HasFactory;
    protected $table = 'absen_guru';
    protected $fillable = [
        'tanggal_absen_guru', 'waktu_mulai_guru', 'waktu_selesai_guru', 'keterangan_guru', 'pengajar_id', 'kelas_id', 'mata_pelajaran_id'
    ];

    //Memiliki banyak pengajar
    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
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
