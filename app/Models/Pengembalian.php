<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $primaryKey = 'ID_Pengembalian';
    public $timestamps = true;

    protected $fillable = [
        'ID_Peminjaman',
        'ID_Petugas',
        'ID_Anggota',
        'Tanggal_Pengembalian',
        'Denda',
    ];

    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjaman', 'ID_Peminjaman', 'ID_Peminjaman');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Petugas', 'ID_Petugas', 'ID_Petugas');
    }

    public function anggota()
    {
        return $this->belongsTo('App\Anggota', 'ID_Anggota', 'ID_Anggota');
    }
}
