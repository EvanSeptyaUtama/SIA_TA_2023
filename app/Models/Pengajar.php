<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;
    protected $table = 'pengajars';
    protected $fillable = [
        'nip_pengajar', 'nama_pengajar','foto_pengajar', 'no_telp_pengajar', 'jenis_kelamin_pengajar', 'alamat_pengajar', 'tempat_lahir_pengajar', 'ttl_pengajar',  'jabatan_pengajar', 'agama_pengajar', 'suku_pengajar', 'rt_rw_pengajar', 'desa_kelurahan_pengajar', 'kecamatan_kota_pengajar', 'kode_pos_pengajar'
    ,'kelas_id'
    ];

    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
