<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Guru extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'guru';
    protected $primaryKey = 'nuptk_guru';

    protected $fillable = [
        'nuptk_guru',
        'nama_guru',
    ];
}
