<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'no_pegawai' => $request->input('no_pegawai'),
            'password' => $request->input('password'),
        ];

        if (auth()->guard('admin')->attempt($data)) {
            $admin = auth()->guard('admin')->user();
            $admin->save();

            return response()->json(['token' => $admin->api_token]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Display the specified resource.
     */
}
