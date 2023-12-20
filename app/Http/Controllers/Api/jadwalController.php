<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_kelas = null)
    {
        $jadwal = Jadwal::where('id_kelas', $id_kelas)->get()->load('mapel', 'guru', 'kelas');
        return response()->json(['data' => $jadwal], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}
