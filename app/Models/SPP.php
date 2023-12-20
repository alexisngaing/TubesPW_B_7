<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SPP extends Model
{
    use HasFactory, HasFactory, Notifiable;

    protected $table = 'spp';
    protected $primaryKey = 'kode_pembayaran';

    public $timestamps = false;

    protected $fillable = [
        'kode_pembayaran',
        'tahun_pembayaran',
        'semester',
        'tanggal_mulai',
        'tanggal_berakhir',
        'biaya',
        'status',
    ];
}
