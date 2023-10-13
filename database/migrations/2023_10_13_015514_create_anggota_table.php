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
        Schema::create('anggota', function (Blueprint $table) {
            $table->integer('ID_Anggota');
            $table->string('Nama_Anggota', 100);
            $table->string('Kelas', 100);
            $table->string('Jurusan', 100);
            $table->string('Alamat', 255);
            $table->string('Nomor_Telepon', 15);
            $table->date('Tanggal_Bergabung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
