<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PembayaranController extends Controller
{
    public function index($nis)
    {
        $users = User::find($nis);

        if (!$users) {
            return redirect()->back();
        }

        $sppRecords = $users->pembayaranSPP;

        return view('pembayaran', compact('users', 'sppRecords'));
    }
}
