<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pesan = Pesan::get();
        return view('admin/daftar-pesan', compact('pesan'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show($id_pesan)
    {
        $pesan = Pesan::find($id_pesan);
        return view('admin/detail-pesan', compact('pesan'));  
    }

   
    public function edit(Pesan $pesan)
    {
        //
    }

    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    public function destroy($id_pesan)
    {
        $pesan = Pesan::find($id_pesan);
        $pesan->delete();
        return redirect('DaftarPesan')->with('sukses','Pesan Terhapus!');
    }
}