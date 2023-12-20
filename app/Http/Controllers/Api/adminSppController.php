<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SPP;
use illuminate\Support\Facades\Validator;
use App\Models\PembayaranSPP;
use App\Models\Kelas;
use App\Models\User;

class adminSppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spp = Spp::all();
        return response()->json($spp);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_pembayaran' => 'required|string|max:255|unique:spp',
            'tahun_pembayaran' => 'required',
            'semester' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'biaya' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $spp = Spp::create($request->all());
        return response()->json($spp, 201);
    }

    /**
     * Display the specified resource.
     */
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
        return redirect()->route('admin-konfirmasi-spp');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kode_pembayaran)
    {
        $spp = Spp::where('kode_pembayaran', $kode_pembayaran)->first();

        if (!$spp) {
            return response()->json(['error' => 'Data pengguna tidak ditemukan.'], 404);
        }

        $validator = Validator::make($request->all(), [
            'tahun_pembayaran' => 'required|string',
            'semester' => 'required',
            'tanggal_mulai' => 'required|string',
            'tanggal_berakhir' => 'required|string',
            'biaya' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $spp->update([
            'tahun_pembayaran' => $request->input('tahun_pembayaran'),
            'semester' => $request->input('semester'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_berakhir' => $request->input('tanggal_berakhir'),
            'biaya' => $request->input('biaya'),
        ]);

        return response()->json($spp, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_pembayaran)
    {
        $spp = Spp::where('kode_pembayaran', $kode_pembayaran)->firstOrFail();
        $spp->delete();

        return response()->json(null, 204);
    }
}
