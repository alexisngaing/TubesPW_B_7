<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if (!$user == NULL) {
            return response(['message' => 'Retrieve All Success', 'data' => $user], 200);
        }

        return response(['message' => 'Empty', 'data' => null], 400);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('editProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'agama' => 'required|string',
            'penjurusan' => 'required|string',
            'asal_sekolah' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $user = Auth::user();

        $user->update([
            'agama' => $request->input('agama'),
            'penjurusan' => $request->input('penjurusan'),
            'asal_sekolah' => $request->input('asal_sekolah'),
            'alamat' => $request->input('alamat'),
        ]);

        return redirect()->route('profile.index')->with('success', 'Profil berhasil diperbarui.');
    }

    public function actionForget(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->input('password')),
        ]);
        return redirect()->route('profile.index');
    }
}
