<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'kotas';
    protected $fillable = [
        'nama_kota'
    ];

    //Memiliki banyak produk
    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori_id', 'kota_id');
    }
}
