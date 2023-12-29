<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalImunisasi extends Model
{
    use HasFactory;
    protected $table = 'jadwal_imunisasis';

    protected $fillable = [
        'nama_vaksin',
        'usia_bayi',
    ];

    
}
