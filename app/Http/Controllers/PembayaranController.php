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
        $history = PembayaranSPP::where('nis_siswa', $nis)->get()->load('spp', 'user');

        if (!$history) {
            return redirect()->back();
        }

        return view('pembayaran', compact('history'));
    }
}
