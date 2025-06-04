<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';
    

    protected $fillable = [
        'name',
        'email',
        'password',
        'no_hp',
        'role',
        'alamat'
    ];

    // Define relationships
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
