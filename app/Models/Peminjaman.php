<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'ID_Peminjaman';
    public $timestamps = true;

    protected $fillable = [
        'ID_Anggota',
        'ID_Buku',
        'Tanggal_Peminjaman',
        'Tanggal_Jatuh_Tempo',
        'Status',
        'ID_Petugas',
    ];

    public function anggota()
    {
        return $this->belongsTo('App\Anggota', 'ID_Anggota', 'ID_Anggota');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku', 'ID_Buku', 'ID_Buku');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Petugas', 'ID_Petugas', 'ID_Petugas');
    }
}
