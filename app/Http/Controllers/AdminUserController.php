<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $siswa = User::all();
        return view('manage-user', compact('siswa'));
    }
}
