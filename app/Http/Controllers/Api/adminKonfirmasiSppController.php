<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminKonfirmasiSppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['message'=>'Confirm SPP!']);
    }

    /**
     * Store a newly created resource in storage.
     */
    
}
