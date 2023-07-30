<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jurusan = Jurusan::get();
        return view('admin/daftar-jurusan', compact('jurusan'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);
        Jurusan::create($request->all());
        return redirect('DaftarJurusan')->with('sukses','Data Added Successfully.');
    }

    
    public function show(Jurusan $jurusan)
    {
        //
    }

    public function edit($id)
    {
    	$jurusan = Jurusan::find($id);
        return view('admin/edit-jurusan', compact('jurusan'));
	   
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jurusan' => 'required',
        ]);
        $jurusan = Jurusan::find($id);
        $jurusan->nama_jurusan=$request->nama_jurusan;
        $simpan = $jurusan->update();
        return redirect('DaftarJurusan')->with('sukses','Data berhasih di ubah!.');
    }

    
    public function destroy($id_jurusan)
    {
        $jurusan = Jurusan::find($id_jurusan);
        $jurusan->delete();
        return redirect('DaftarJurusan')->with('sukses','Data Berhasil di Hapus.');
    }
}