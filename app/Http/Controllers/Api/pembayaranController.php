<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PembayaranSPP;

class pembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($nis)
    {
        $history = PembayaranSPP::where('nis_siswa', $nis)->get()->load('spp', 'user');

        if (!$history) {
            return response()->json(['message' => 'History not found'], 404);
        }

        return response()->json(['data' => $history], 200);
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
