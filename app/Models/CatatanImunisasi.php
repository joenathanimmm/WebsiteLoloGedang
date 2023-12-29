<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanImunisasi extends Model
{
    use HasFactory;
    protected $table = 'catatan_imunisasis'; // Nama tabel yang sesuai

    protected $fillable = [
        'id_anak',
        'id_vaksin',
        'usia_bayi',
        'tanggal_pemberian',
        'lokasi_pemberian',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'id_anak'); // Mendefinisikan relasi dengan model Anak
    }

    public function vaksin()
    {
        return $this->belongsTo(JadwalImunisasi::class, 'id_vaksin'); // Mendefinisikan relasi dengan model Vaksin
    }
}
