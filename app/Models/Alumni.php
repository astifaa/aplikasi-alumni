<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';
    protected $primaryKey = 'id_alumni';

    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'email',
        'telp',
        'jenis_kelamin',
        'id_jurusan',
        'angkatan',
        'id_status',
        'lokasi',
        'tahun_bekerja',
        'domisili',
        'alamat'
    ];
}
