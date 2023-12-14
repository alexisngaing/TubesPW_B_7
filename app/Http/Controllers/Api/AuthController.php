<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\MainSend;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
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
            'jenis_kelamin' => 'required',
            // 'agama' => 'required',
            // 'penjurusan' => 'required',
            // 'asal_sekolah' => 'required',
            // 'alamat' => 'required',
            // 'foto' => 'required',
        ]);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);

        $registrationData['agama'] = 'NULL';
        $registrationData['penjurusan'] = 'NULL';
        $registrationData['asal_sekolah'] = 'NULL';
        $registrationData['alamat'] = 'NULL';
        $registrationData['password'] = bcrypt($request->password);

        $user = User::create($registrationData);

        return response([
            'message' => 'Register Success',
            'user' => $user
        ], 200);
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/home');
        } else {
            return view('/login');
        }
    }

    public function actionLogin(Request $request)
    {
        $loginData = $request->all();

        $validate = Validator::make($loginData, [
            'nis' => 'required|exists:users,nis',
            'password' => 'required',
        ]);

        if ($validate->fails())
            return response(['message' => $validate->errors()], 400);

        if (!Auth::attempt($loginData))
            return response(['message' => 'Invalid Credentials'], 400);

        /** @var \App\Models\User $user **/

        $user = Auth::user();
        $token = $user->createToken('Authentication Token')->accessToken;

        return response([
            'message' => 'Login Success',
            'user' => $user,
            'token_type' => 'Bearer',
            'token' => $token
        ], 200);
    }
}
