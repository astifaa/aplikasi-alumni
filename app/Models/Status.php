<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status_alumni';
    protected $primaryKey = 'id_status';

    protected $fillable = [
        'nama_status',
    ];
}
