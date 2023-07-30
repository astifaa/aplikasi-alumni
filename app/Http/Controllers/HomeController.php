<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Jurusan;
use App\Models\Pesan;
use Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $jmlUser = User::count();
        $jmlAlumni = ALumni::count();
        $jurusan = Jurusan::get();
        $alumni = Alumni::where('nama_lengkap','@@')->get();
        $data = Alumni::where('nama_lengkap','@@')->get();
        $jmlAngkatan = Alumni::select('angkatan')->groupBy('angkatan')->sum('id_alumni');
        $jmlSiswa = "0";
        $jmlPesan = Pesan::count();

        return view('admin/home', compact('jmlPesan','jmlSiswa','alumni','jurusan','jmlUser','jmlAlumni','data', 'jmlAngkatan'));
    }

    public function cari(Request $request)
    {
        
        $jmlUser = User::count();
        $jmlAlumni = ALumni::count();
        $data = Alumni::select('angkatan')->groupBy('angkatan')->get();
        $jmlAngkatan = Alumni::select('angkatan')->groupBy('angkatan')->sum('id_alumni');
        
        $j = $request->id_jurusan;
        $angkatan = $request->angkatan;
        $jurusan = Jurusan::get();
        $jmlPesan = Pesan::count();

        $alumni = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('alumnis.id_jurusan','=',$j)
        ->where('alumnis.angkatan','=',$angkatan)
        ->get();


        $jmlSiswa = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('alumnis.id_jurusan','=',$j)
        ->where('alumnis.angkatan','=',$angkatan)->count();

        return view('admin/home', compact('jmlPesan','jmlUser','jurusan','alumni','jmlSiswa','jmlAlumni','data', 'jmlAngkatan'));
    }

    public function profil(){
        
        $data = User::select('*')->where('id','=', Auth::user()->id)->get();
        return view('admin/profil', compact('data'));
    }

    public function edit($id)
    {
    	$user = User::find($id);
        return view('admin/edit-profil', compact('user'));
	   
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);
        $user = User::find($id);
        $user->id=$request->id;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role=$request->role;
        $simpan = $user->update();
        
        return redirect('home')->with('sukses','Data berhasih di ubah!.');
    }


    
}