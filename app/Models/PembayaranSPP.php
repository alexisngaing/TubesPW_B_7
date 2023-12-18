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

    protected $fillable = [
        'nis_siswa',
        'kode_pembayaran_spp',
        'tanggal_bayaran',
        'denda',
    ];
}
