<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\hash;

class loginController extends Controller
{
    public function login(Request $request)
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
