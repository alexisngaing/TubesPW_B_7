<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;


class registerController extends Controller
{
    public function register(Request $request)
    {
        $registrationData = $request->all();

        $validate = Validator::make($registrationData, [
            'nis' => 'required|max:10|unique:users',
            'nama' => 'required|max:60',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'agama' => 'required',
            // 'penjurusan' => 'required',
            // 'asal_sekolah' => 'required',
            // 'alamat' => 'required',
            // 'foto' => 'required',
        ]);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);

        $registrationData['jenis_kelamin'] = null;
        $registrationData['agama'] = null;
        $registrationData['penjurusan'] = null;
        $registrationData['asal_sekolah'] = null;
        $registrationData['alamat'] = null;
        $registrationData['password'] = bcrypt($request->password);

        $user = User::create($registrationData);

        return response([
            'message' => 'Register Success',
            'user' => $user
        ], 200);
    }
}
