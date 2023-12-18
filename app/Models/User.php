<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'nis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'nis',
        'nama',
        'email',
        'password',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'penjurusan',
        'asal_sekolah',
        'alamat',
        'verify_key',
        'active',
        // 'foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id', 'id_kelas');
    }

    public function pembayaranSPP()
    {
        return $this->hasMany(PembayaranSPP::class, 'nis', 'nis_siswa');
    }
}
