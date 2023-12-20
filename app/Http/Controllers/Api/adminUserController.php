<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class adminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = User::all();
        return response()->json(['siswa' => $siswa], 200);
    }

   
    public function update(Request $request, $nis)
    {
        $siswa = User::where('nis', $nis)->first();

        if (!$siswa) {
            return response()->json(['error' => 'Data pengguna tidak ditemukan.'], 404);
        }

        $request->validate([
            'nama' => 'required|string',
            'agama' => 'required|string',
            'penjurusan' => 'required|string',
            'asal_sekolah' => 'required|string',
            'semester' => 'required',
            'alamat' => 'required|string',
            // Tambahkan aturan validasi untuk bidang lain jika diperlukan
        ]);

        $siswa->update([
            'nama' => $request->input('nama'),
            'agama' => $request->input('agama'),
            'penjurusan' => $request->input('penjurusan'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'semester' => $request->input('semester'),
            'alamat' => $request->input('alamat'),
            // Tambahkan bidang lain yang akan diperbarui
        ]);

        return response()->json(['message' => 'Data pengguna berhasil diperbarui.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nis)
    {
        $siswa = User::where('nis', $nis)->first();

        if (!$siswa) {
            return response()->json(['error' => 'Data pengguna tidak ditemukan.'], 404);
        }

        $siswa->delete();

        return response()->json(['message' => 'Data siswa berhasil dihapus.'], 200);
    }
}
