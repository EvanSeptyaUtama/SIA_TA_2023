<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kategori'
    ];


    //Memiliki banyak produk
    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori_id', 'kota_id');
    }
}
