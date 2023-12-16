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

    public function addClass(Request $request, $id)
    {
        $spp = SPP::find($id);
        if (!$spp) {
            return redirect()->back();
        }

        $data = $request->all();
        $user = User::Where('id_kelas', $data['id_kelas'])->get()->load('kelas');
        return $user;
        return redirect()->route('admin-konfirmasi-spp');
    }
}
