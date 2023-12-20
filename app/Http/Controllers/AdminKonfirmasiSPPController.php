<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranSPP;

class AdminKonfirmasiSPPController extends Controller
{
    public function index()
    {
        $payment = PembayaranSPP::all()->load('spp', 'user');
        // return $payment;
        return view('admin/manage-pembayaran-spp', compact('payment'));
    }

    public function konfirmasiPembayaran($kode_riwayat_pembayaran)
    {
        $payment = PembayaranSPP::where('kode_riwayat_pembayaran', $kode_riwayat_pembayaran)->first();
        if (!$payment) {
            return redirect()->back();
        }

        $payment->update([
            'status' => 'Lunas',
        ]);

        return redirect()->back();
    }
}
