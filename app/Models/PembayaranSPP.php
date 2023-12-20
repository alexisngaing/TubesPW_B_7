<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PembayaranSPP extends Model
{
    use HasFactory, HasFactory, Notifiable;

    protected $table = 'history_pembayaran_spp';
    protected $primaryKey = 'kode_riwayat_pembayaran';
    public $timestamps = false;

    protected $fillable = [
        'nis_siswa',
        'kode_pembayaran_spp',
        'tanggal_bayaran',
        'denda',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'nis_siswa', 'nis');
    }

    public function spp()
    {
        return $this->belongsTo(SPP::class, 'kode_pembayaran_spp', 'kode_pembayaran');
    }
}
