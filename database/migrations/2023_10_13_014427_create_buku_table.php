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
        Schema::create('buku', function (Blueprint $table) {
            $table->integer('ID_Buku');
            $table->string('Kode_Buku', 255);
            $table->string('Judul_Buku', 255);
            $table->string('Penulis', 255);
            $table->string('Penerbit', 255);
            $table->integer('Tahun_Terbit');
            $table->string('Kategori', 50);
            $table->integer('Jumlah_Salinan_Tersedia');
            $table->integer('Rak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
