<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengguna extends Model
{
    use Hasfactory;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'no_hp',
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'pengguna ');
    }
}
