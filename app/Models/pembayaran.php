<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pembayaran extends Model
{
    use Hasfactory;

    protected $fillable = [
        'id_pesanan',
        'tanggal_pembayaran',
        'metode_pembayaran',
        'status_pembayaran',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id');
    }
}
