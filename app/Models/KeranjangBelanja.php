<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KeranjangBelanja extends Model
{
    use Hasfactory;

    protected $fillable = [
        'user_id',
        'prooduk_id',
    ];

    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'keranjang_belanja', 'pengguna_id', 'produk_id');
    }

    public function pengguna()
    {
        return $this->belongsToMany(Pengguna::class, 'keranjang_belanja', 'produk_id', 'pengguna_id');
    }
}
