<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalamanUtama extends Model
{
    use HasFactory;
    protected $table = 'halaman_utamas';
    protected $fillable = [
        'nama_yayasan', 'nama_instansi', 'penjelasan', 'gambar'
    ];
}
