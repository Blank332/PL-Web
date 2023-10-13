<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'ID_Buku';
    public $timestamps = true;

    protected $fillable = [
        'Kode_Buku',
        'Judul_Buku',
        'Penulis',
        'Penerbit',
        'Tahun_Terbit',
        'Kategori',
        'Jumlah_Salinan_Tersedia',
        'Rak',
    ];

    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'ID_Buku', 'ID_Buku');
    }
}
