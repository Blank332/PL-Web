<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'ID_Anggota';
    public $timestamps = true;

    protected $fillable = [
        'Nama_Anggota',
        'Kelas',
        'Jurusan',
        'Alamat',
        'Nomor_Telepon',
        'Tanggal_Bergabung',
    ];

    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'ID_Anggota', 'ID_Anggota');
    }

    public function pengembalian()
    {
        return $this->hasMany('App\Pengembalian', 'ID_Anggota', 'ID_Anggota');
    }
}
