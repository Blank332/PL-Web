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
        Schema::create('petugas', function (Blueprint $table) {
            $table->integer('ID_Petugas');
            $table->string('Nama_Petugas', 100);
            $table->string('Email', 255)->unique();
            $table->string('Password', 250);
            $table->string('Alamat', 255);
            $table->string('Nomor_Telepon', 15);
            $table->string('Jabatan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
