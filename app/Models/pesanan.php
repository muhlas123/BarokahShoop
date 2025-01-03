<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pesanan extends Model
{
    use Hasfactory;

    protected $fillable = [
        'user_id',
        'tanggal_pesanan',
        'status',
        'total',
        'alamat_pengiriman',
    ];
    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'pesanan_id');
    }
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'pesanan_id');
    }
}
