<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = User::get();
        return view('admin/daftar-user', compact('user'));
    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('DaftarUser')->with('sukses','Data Berhasil di Hapus.');
    }
}