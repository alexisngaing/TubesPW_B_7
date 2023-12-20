<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;

class AdminUserController extends Controller
{
    public function index()
    {
        $siswa = User::all()->load('kelas');
        $kelas = Kelas::all();
        // return $siswa;
        return view('admin/manage-user', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $nis)
    {
        $siswa = User::find($nis);

        // return $nis;

        if (!$siswa) {
            return redirect()->route('manage-user')->with('error', 'Data pengguna tidak ditemukan.');
        }
        // return $request;
        $request->validate([
            'nama' => 'required|string',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'penjurusan' => 'required',
            'asal_sekolah' => 'required',
            'id_kelas' => 'required',
            'semester' => 'required',
            'status' => 'required',
        ]);

        $siswa->update([
            'nama' => $request->input('nama'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'penjurusan' => $request->input('penjurusan'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'id_kelas' => $request->input('id_kelas'),
            'semester' => $request->input('semester'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('manage-user')->with('success', 'Data pengguna berhasil diperbarui.');
    }


    public function destroy($nis)
    {
        $siswa = User::where('nis', $nis)->firstOrFail();
        $siswa->delete();

        return redirect()->route('manage-user')->with('success', 'Data siswa berhasil dihapus.');
    }
}
