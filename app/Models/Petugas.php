<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'ID_Petugas';
    public $timestamps = true;

    protected $fillable = [
        'Nama_Petugas',
        'Email',
        'Password',
        'Alamat',
        'Nomor_Telepon',
        'Jabatan',
    ];

    public function peminjaman()
    {
        return $this->hasMany('App\Peminjaman', 'ID_Petugas', 'ID_Petugas');
    }

    public function pengembalian()
    {
        return $this->hasMany('App\Pengembalian', 'ID_Petugas', 'ID_Petugas');
    }
}
