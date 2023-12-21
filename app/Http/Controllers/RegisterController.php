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
        return view('auth/register');
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
            'jenis_kelamin' => null,
            'agama' => null,
            'penjurusan' => null,
            'asal_sekolah' => null,
            'alamat' => null,
            'verify_key' => $str,
            'id_kelas' => null,
            'semester' => null,
            'status' => null,
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
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)->update([
                'active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
            return view('auth/viewRegis');
        } else {
            return "Key tidak valid.";
        }
    }
}
