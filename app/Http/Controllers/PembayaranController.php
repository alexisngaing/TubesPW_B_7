<?php

namespace App\Http\Controllers;

use App\Models\PembayaranSPP;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SPP;

class PembayaranController extends Controller
{
    public function index($nis)
    {
        $tagihan = PembayaranSPP::where('nis_siswa', $nis)->where(function ($query) {
            $query->where('status', null)->orWhere('status', 'Menunggu Konfirmasi');
        })->get()->load('spp', 'user');
        $history = PembayaranSPP::where('nis_siswa', $nis)->where('status', 'Lunas')->get()->load('spp', 'user');

        if (!$tagihan) {
            return redirect()->back();
        }
        if (!$history) {
            return redirect()->back();
        }

        // return $tagihan;

        return view('users/pembayaran', compact('tagihan', 'history'));
    }

    public function ajukanKonfirmasi($kode_riwayat_pembayaran)
    {
        $payment = PembayaranSPP::where('kode_riwayat_pembayaran', $kode_riwayat_pembayaran)->first();
        if (!$payment) {
            return redirect()->back();
        }

        $payment->update([
            'status' => 'Menunggu Konfirmasi',
        ]);

        return redirect()->back();
    }
}
