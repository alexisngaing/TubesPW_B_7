<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index($id_kelas = null)
    {
        $jadwal = Jadwal::where('id_kelas', $id_kelas)->get()->load('mapel', 'guru', 'kelas');
        return view('jadwal', compact('jadwal'));
    }
}
