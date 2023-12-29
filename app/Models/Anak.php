<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $table = 'anak'; // Menyebutkan nama tabel yang sesuai
    protected $fillable = ['nama','umur' ,'nik', 'jenisKelamin', 'user_id'];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function catatanImunisasi()
    {
        return $this->hasMany(CatatanImunisasi::class, 'id_anak'); // Mendefinisikan relasi dengan model CatatanImunisasi
    }
}
