<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required',
            'role'=> 'required',
            ]);
    
            if ($validator->fails()) {
                return redirect('recandyster')
                    ->withErrors($validator)
                    ->withInput();
            } else {
        //     $user = new User();
        // $user->email = $request->email; 
        // $user->username = $request->username; 
        // $user->password = Hash::make($request->password);
        // $user->role = $request->role; 
        // $user->verify_key = $str; 
        // $user->save();

        $str = Str::random(100);
        
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'verify_key' => $str
        ]);

        $details = [
            'username' => $request->username,
            'role' => $request->role,
            'website' => 'Aplikasi Alumni SMKTIP Cimahi',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/recandyster/verify/'.$str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikrim ke Email Anda. Silahkan Cek Email Anda untuk Mengaktifkan Akun');
        return redirect('recandyster');
    }
}
    
    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
                    ->where('verify_key', $verify_key)
                    ->exists();
        
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1
            ]);
            
            echo "<center><h2 style='font-family:calibri; color:green; margin-top:100px;'>Verifikasi Berhasil! <br>
            Akun Anda sudah aktif.</h2></center>";
        }else{
            return "Key tidak valid!";
        }
    }
}