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
        Schema::create('cover_administration', function (Blueprint $table) {
            $table->id();
            $table->text('header'); // Dibatasi jika pendek, atau gunakan $table->text('header') jika panjang
            $table->string('tahun_ajaran', 9); // Menghemat ruang penyimpanan DB (contoh: 2025/2026)
            $table->string('img'); // Sesuai untuk menyimpan path/URL gambar
            $table->string('penyusun', 100);
            $table->string('nama_sekolah', 100);
            $table->year('tahun'); // Tahun dalam format YYYY
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cover_administration');
    }
};
