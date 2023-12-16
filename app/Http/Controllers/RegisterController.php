<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionRegister(Request $request)
    {
        $existingUser = User::where('nis', $request->nis)->first();
        if ($existingUser) {
            Session::flash('error', "NIS sudah terdaftar. gunakan NIS yang berbeda");
            return redirect('register');
        }

        $existingEmail = User::where('email', $request->email)->first();
        if ($existingEmail) {
            Session::flash('error', "Email sudah terdaftar. gunakan Email yang berbeda");
            return redirect('register');
        }

        $str = Str::random(100);
        $user = User::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => 'NULL',
            'agama' => 'NULL',
            'penjurusan' => 'NULL',
            'asal_sekolah' => 'NULL',
            'alamat' => 'NULL',
            'verify_key' => $str,
        ]);

        $details = [
            'nama' => $request->nama,
            'website' => 'SMIS',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str,
        ];
        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message', 'Silakan cek email anda untuk verifikasi akun');
        return redirect('/');
        // $registrationData = $request->all();

        // $validate = Validator::make($registrationData, [
        //     'nis' => 'required|max:10|unique:users',
        //     'nama' => 'required|max:60',
        //     'email' => 'required|email:rfc,dns|unique:users',
        //     'password' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     // 'agama' => 'required',
        //     // 'penjurusan' => 'required',
        //     // 'asal_sekolah' => 'required',
        //     // 'alamat' => 'required',
        //     // 'foto' => 'required',
        // ]);

        // if ($validate->fails())
        //     return response(['message' => $validate->errors()], 400);

        // $registrationData['agama'] = 'NULL';
        // $registrationData['penjurusan'] = 'NULL';
        // $registrationData['asal_sekolah'] = 'NULL';
        // $registrationData['alamat'] = 'NULL';
        // $registrationData['password'] = bcrypt($request->password);

        // $user = User::create($registrationData);

        // return response([
        //     'message' => 'Register Success',
        //     'user' => $user
        // ], 200);
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)->update([
                'active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
            return "Akun anda telah diverifikasi, silakan login.";
        } else {
            return "Key tidak valid.";
        }
    }
}
