<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_produk', 'harga_produk', 'kategori_id', 'kota_id'
    ];

    //Memiliki 1 kategori
    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    //Memiliki 1 kota
    public function kotas()
    {
        return $this->belongsTo(Kota::class, 'kota_id');
    }
}
