<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('users/profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('users/editProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'agama' => 'required|string',
            // 'penjurusan' => 'required|string',
            'asal_sekolah' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $user = Auth::user();

        $user->update([
            'agama' => $request->input('agama'),
            // 'penjurusan' => $request->input('penjurusan'),
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
