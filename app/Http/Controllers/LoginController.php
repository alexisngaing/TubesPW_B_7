<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\hash;
use App\Http\Controllers\ProfileController;


class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'nis' => $request->input('nis'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->active) {
                return redirect('home');
            } else {
                Auth::logout();
                Session::flash('error', 'Akun anda belum diverifikasi, silahkan cek email anda');
                return redirect('/');
            }
        } else {
            Session::flash('error', 'NIS atau password salah');
            return redirect('/');
        }

        // $loginData = $request->all();

        // $validate = Validator::make($loginData, [
        //     'nis' => 'required|exists:users,nis',
        //     'password' => 'required',
        // ]);

        // if ($validate->fails())
        //     return response(['message' => $validate->errors()], 400);

        // if (!Auth::attempt($loginData))
        //     return response(['message' => 'Invalid Credentials'], 400);

        // /** @var \App\Models\User $user **/

        // $user = Auth::user();
        // $token = $user->createToken('Authentication Token')->accessToken;

        // return response([
        //     'message' => 'Login Success',
        //     'user' => $user,
        //     'token_type' => 'Bearer',
        //     'token' => $token
        // ], 200);
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function actionForget(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'password' => Hash::make($request->input('password')),
        ]);
        // Redirect to the profile page or another appropriate page
        return redirect()->route('profile');
    }
}
