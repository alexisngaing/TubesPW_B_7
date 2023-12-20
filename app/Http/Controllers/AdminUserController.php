<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $siswa = User::all();
        return view('manage-user', compact('siswa'));
    }

    public function update(Request $request, $nis)
    {
        // Menggunakan first() tanpa menggunakan firstOrFail()
        $siswa = User::where('nis', $nis)->first();
        // $siswa = User::find($nis);

        // Cek apakah record ditemukan
        if (!$siswa) {
            return redirect()->route('manage-user')->with('error', 'Data pengguna tidak ditemukan.');
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
        // Perbarui data pengguna
        $siswa->update([
            'nama' => $request->input('nama'),
            'agama' => $request->input('agama'),
            'penjurusan' => $request->input('penjurusan'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'semester' => $request->input('semester'),
            'alamat' => $request->input('alamat'),
            // Tambahkan bidang lain yang akan diperbarui
        ]);
        $dumy = $request->input('semester');
        // dd($dumy);

        return redirect()->route('manage-user')->with('success', 'Data pengguna berhasil diperbarui.');
    }


    public function destroy($nis)
    {
        $siswa = User::where('nis', $nis)->firstOrFail();
        $siswa->delete();

        return redirect()->route('manage-user')->with('success', 'Data siswa berhasil dihapus.');
    }
}
