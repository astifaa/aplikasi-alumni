<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $status = Status::get();
        return view('admin/daftar-status', compact('status'));
    }
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama_status' => 'required',
        ]);
        Status::create($request->all());
        return redirect('DaftarStatus')->with('sukses','Data Added Successfully.');
    }

    
    public function show(Status $Status)
    {
        //
    }

    public function edit($id)
    {
    	$status = Status::find($id);
        return view('admin/edit-status', compact('status'));
	   
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_status' => 'required',
        ]);
        $status = Status::find($id);
        $status->nama_status=$request->nama_status;
        $simpan = $status->update();
        return redirect('DaftarStatus')->with('sukses','Data berhasih di ubah!.');
    }

    
    public function destroy($id_status)
    {
        $status = Status::find($id_status);
        $status->delete();
        return redirect('DaftarStatus')->with('sukses','Data Berhasil di Hapus.');
    }
}