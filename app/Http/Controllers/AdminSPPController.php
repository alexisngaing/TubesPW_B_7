<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SPP;
use App\Models\PembayaranSPP;
use App\Models\Kelas;
use App\Models\User;

class AdminSPPController extends Controller
{
    public function index()
    {
        $spp = SPP::all();
        $kelas = Kelas::all();
        return view('admin/manage-spp', compact('spp', 'kelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_pembayaran' => 'required|string|max:255|unique:spp',
            'semester' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'biaya' => 'required',
        ]);

        $data = $request->all();
        SPP::create($data);
        return redirect()->route('manage-spp');
    }

    public function addToSpesificKelas(Request $request, $id)
    {
        $spp = SPP::find($id);
        if (!$spp) {
            return redirect()->back();
        }

        $data = $request->all();
        $users = User::Where('id_kelas', $data['id_kelas'])->get();

        foreach ($users as $user) {
            $payment = new PembayaranSPP();
            $payment->nis_siswa = $user->nis;
            $payment->kode_pembayaran_spp = $spp->kode_pembayaran;
            $payment->tanggal_bayaran = date('Y-m-d');
            $payment->denda = 0;
            $payment->save();
        }
        // return $user;
        return redirect()->route('manage-spp');
    }

    public function update(Request $request, $kode_pembayaran)
    {
        // Menggunakan first() tanpa menggunakan firstOrFail()
        $spp = Spp::where('kode_pembayaran', $kode_pembayaran)->first();
        // $siswa = User::find($nis);

        // Cek apakah record ditemukan
        if (!$spp) {
            return redirect()->route('manage-user')->with('error', 'Data pengguna tidak ditemukan.');
        }

        $request->validate([
            'tahun_pembayaran' => 'required|string',
            'semester' => 'required',
            'tanggal_mulai' => 'required|string',
            'tanggal_berakhir' => 'required|string',
            'biaya' => 'required|string',
            // Tambahkan aturan validasi untuk bidang lain jika diperlukan
        ]);
        // Perbarui data pengguna
        $spp->update([
            'tahun_pembayaran' => $request->input('tahun_pembayaran'),
            'semester' => $request->input('semester'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_berakhir' => $request->input('tanggal_berakhir'),
            'biaya' => $request->input('biaya'),
        ]);
        // $dumy = $request->input('tanggal_selesai');
        // dd($dumy);

        return redirect()->route('manage-spp')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function destroy($kode_pembayaran)
    {
        $siswa = Spp::where('kode_pembayaran', $kode_pembayaran)->firstOrFail();
        $siswa->delete();

        return redirect()->route('manage-spp')->with('success', 'Data SPP berhasil dihapus.');
    }
}
