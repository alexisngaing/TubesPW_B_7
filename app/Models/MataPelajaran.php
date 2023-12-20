<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MataPelajaran extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'kode_mapel';

    protected $fillable = [
        'kode_mapel',
        'nama_mapel',
        'deskripsi',
    ];
}
