<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\MataPelajaran;

class adminJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return response()->json(['success' => true, 'data' => $jadwal]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_mapel_mapel' => 'required',
            'nuptk_guru_guru' => 'required',
            'hari' => 'required',
            'jam_pelajaran' => 'required',
            'id_kelas' => 'required',
        ]);

        $jadwal = Jadwal::create($validatedData);

        return response()->json(['success' => true, 'data' => $jadwal]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addToSpecificKelas(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        if (!$jadwal) {
            return response()->json(['message' => 'Jadwal not found'], 404);
        }

        $data = $request->all();
        $kelas = Kelas::find($data['id_kelas']);
        $users = $kelas->users;

        foreach ($users as $user) {
            $jadwal->users()->attach($user->nis);
        }

        return response()->json(['message' => 'Jadwal added to kelas successfully'], 200);
    }
}
