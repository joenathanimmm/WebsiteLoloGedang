<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catatan_imunisasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vaksin');
            $table->unsignedBigInteger('id_anak'); // Menambahkan kolom foreign key
            $table->string('usia_bayi');
            $table->date('tanggal_pemberian'); // Tambahkan kolom "Tanggal Pemberian"
            $table->string('lokasi_pemberian'); // Tambahkan kolom "Lokasi Pemberian"
            $table->timestamps();

            $table->foreign('id_vaksin')->references('id')->on('jadwal_imunisasis');
            $table->foreign('id_anak')->references('id')->on('anak'); // Menambahkan constraint foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_imunisasis');
    }
};
