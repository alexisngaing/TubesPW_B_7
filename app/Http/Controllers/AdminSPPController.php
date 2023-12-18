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
        return view('manage-spp', compact('spp', 'kelas'));
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
            $payment->tanggal_pembayaran = date('Y-m-d');
            $payment->denda = 0;
            $payment->save();
        }
        // return $user;
        return redirect()->route('admin-konfirmasi-spp');
    }
}
