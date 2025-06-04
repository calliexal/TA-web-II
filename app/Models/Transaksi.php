<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'pengguna_id',
        'mobil_id',
        'tanggal_pemesanan',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_harga',
        'status_pembayaran',
    ];

    // Relasi ke model Pengguna
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    // Relasi ke model Mobil
    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
}
