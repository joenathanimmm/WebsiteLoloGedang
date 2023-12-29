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
        Schema::table('users', function (Blueprint $table) {
            $table->string('NIK')->nullable()->unique()->after('name');
            $table->string('jenis_kelamin')->nullable()->after('NIK');
            $table->integer('umur')->nullable()->after('jenis_kelamin');
            $table->text('alamat')->nullable()->after('umur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
