<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/admin');
    }

    public function loginAdmin(Request $request)
    {
        $data = [
            'no_pegawai' => $request->input('no_pegawai'),
            'password' => $request->input('password'),
        ];
        // return $data;

        if (auth()->guard('admin')->attempt($data)) {
            $admin = auth()->guard('admin')->user();
            return redirect('admin-home');
        } else {
            Session::flash('error', 'No. Pegawai atau password salah');
            return redirect('admin');
        }
    }
}
