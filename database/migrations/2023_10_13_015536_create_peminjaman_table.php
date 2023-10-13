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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('ID_Peminjaman');
            $table->integer('ID_Anggota');
            $table->integer('ID_Buku');
            $table->date('Tanggal_Peminjaman');
            $table->date('Tanggal_Jatuh_Tempo');
            $table->string('Status', 20);
            $table->integer('ID_Petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
