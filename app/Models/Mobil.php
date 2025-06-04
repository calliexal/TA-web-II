<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $fillable = [
        'gambar',
        'nama_mobil',
        'merk',
        'plat_nomor',
        'bahan_bakar',
        'harga_sewa',
        'status',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
