<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\MataPelajaran;

class AdminJadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all()->load('mapel', 'guru', 'kelas');
        $jadwal = Jadwal::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        $mapel = MataPelajaran::all();
        // return $jadwal;
        return view('admin/manage-jadwal', compact('jadwal', 'kelas', 'guru', 'mapel'));
        // return view('manage-jadwal', compact('jadwal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mapel_mapel' => 'required',
            'nuptk_guru_guru' => 'required',
            'hari' => 'required',
            'jam_pelajaran' => 'required',
            'id_kelas' => 'required',
        ]);


        Jadwal::create([
            'kode_mapel_mapel' => $request->input('kode_mapel_mapel'),
            'nuptk_guru_guru' => $request->input('nuptk_guru_guru'),
            'hari' => $request->input('hari'),
            'jam_pelajaran' => $request->input('jam_pelajaran'),
            'id_kelas' => $request->input('id_kelas'),
        ]);

        return redirect()->route('manage-jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    // public function addToSpecificKelas(Request $request, $id)
    // {
    //     $jadwal = Jadwal::find($id);
    //     if (!$jadwal) {
    //         return redirect()->back();
    //     }

    //     $data = $request->all();
    //     $kelas = Kelas::find($data['id_kelas']);
    //     $users = $kelas->users;

    //     foreach ($users as $user) {
    //         $jadwal->users()->attach($user->nis);
    //     }

    //     return redirect()->route('manage-jadwal');
    // }

    public function edit($id_jadwal)
    {
        $jadwal = Jadwal::findOrFail($id_jadwal);
        $kelas = Kelas::all();
        $guru = Guru::all();
        $mapel = MataPelajaran::all();

        return view('manage-jadwal', compact('jadwal', 'kelas', 'guru', 'mapel'));
    }

    public function update(Request $request, $id_jadwal)
    {
        $request->validate([
            // Sesuaikan dengan kebutuhan validasi Anda
            'kode_mapel_mapel' => 'required',
            'nuptk_guru_guru' => 'required',
            'hari' => 'required',
            'jam_pelajaran' => 'required',
            'id_kelas' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id_jadwal);

        $jadwal->update([
            'kode_mapel_mapel' => $request->input('kode_mapel_mapel'),
            'nuptk_guru_guru' => $request->input('nuptk_guru_guru'),
            'hari' => $request->input('hari'),
            'jam_pelajaran' => $request->input('jam_pelajaran'),
            'id_kelas' => $request->input('id_kelas'),
        ]);

        return redirect()->route('manage-jadwal')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy($id_jadwal)
    {
        $jadwal = Jadwal::findOrFail($id_jadwal);

        // Lakukan logika penghapusan sesuai kebutuhan Anda
        $jadwal->delete();

        return redirect()->route('manage-jadwal')->with('success', 'Jadwal berhasil dihapus.');
    }

}

