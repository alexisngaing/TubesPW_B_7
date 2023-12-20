<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Jadwal extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'jadwal_pelajaran';
    protected $primaryKey = 'id_jadwal';
    public $timestamps = false;

    protected $fillable = [
        'kode_mapel_mapel',
        'nuptk_guru_guru',
        'hari',
        'jam_pelajaran',
    ];

    public function mapel()
    {
        return $this->belongsTo(MataPelajaran::class, 'kode_mapel_mapel', 'kode_mapel');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'nuptk_guru_guru', 'nuptk_guru');
    }
}
