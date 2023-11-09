<?php

namespace App\Models\ProfilInstansi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;
    protected $table = 'ppdb';
    protected $fillable = [
        'judul_ppdb', 'penjelasan_ppdb', 'gambar_brosur_ppdb'
    ];
}
