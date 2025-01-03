<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produk extends Model
{
    use Hasfactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'price',
        'image_url',
        'stok_quantity',
    ];

    public function detail_pesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'produk_id');
    }
    public function keranjangBelanja()
    {
        return $this->belongsToMany(Pengguna::class, 'keranjang_belanja', 'produk_id', 'pengguna_id');
    }
}
