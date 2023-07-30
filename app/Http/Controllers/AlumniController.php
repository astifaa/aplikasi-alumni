<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Alumni;
use App\Models\Jurusan;
use App\Models\Status;
use App\Models\Media;
use App\Models\Pesan;

class AlumniController extends Controller
{
    //Halaman Web
    public function kirimpesan(){
    
       
        return view('kirim-pesan');
    }
    
    public function index()
    {
        $jurusan = Jurusan::get();
        $status = Status::get();
        return view('form-alumni',compact('jurusan','status'));
    }
    
    public function create()
    {
        //
    }
   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'nama_lengkap'=> 'required',
        'nama_panggilan'=> 'required',
        'email'=> 'required|email|unique:alumnis,email',
        'telp'=> 'required',
        'jenis_kelamin'=> 'required',
        'id_jurusan'=> 'required',
        'angkatan'=> 'required',
        'id_status'=> 'required',
        'lokasi'=> 'required',
        'tahun_bekerja'=> 'required',
        'domisili'=> 'required',
        'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('FormAlumni')
                ->withErrors($validator)
                ->withInput();
        }
        $data = new Alumni();
        $data->nama_lengkap = $request->nama_lengkap; 
        $data->nama_panggilan = $request->nama_panggilan; 
        $data->email = $request->email;
        $data->telp = $request->telp; 
        $data->jenis_kelamin = $request->jenis_kelamin; 
        $data->id_jurusan = $request->id_jurusan; 
        $data->angkatan = $request->angkatan; 
        $data->id_status = $request->id_status; 
        $data->lokasi = $request->lokasi; 
        $data->tahun_bekerja = $request->tahun_bekerja; 
        $data->domisili = $request->domisili; 
        $data->alamat = $request->alamat; 
        $data->save();
        
    return redirect('FormAlumni')->with('sukses','Data Added Successfully.');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $Alumni = Alumni::find($id);
        return view('edit-Alumni', compact('Alumni'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'tlp' => 'required',
            'usia' => 'required',
        ]);
        $Alumni = Alumni::find($id);
        $Alumni->nama=$request->nama;
        $Alumni->email=$request->email;
        $Alumni->tlp=$request->tlp;
        $Alumni->usia=$request->usia;
        $simpan = $Alumni->update();

        return redirect('Alumni')->with('succes','Siswa Berhasil di Update');
    }

    
    public function destroy($id)
    {
        $Alumni = Alumni::find($id);
        $Alumni->delete();

        return redirect('Alumni')->with('succes','Siswa Berhasil di Hapus');
    }

    public function simpanpesan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lulusan' => 'required',
            'telp' => 'required',
            'isi_pesan' => 'required',
        ]);
        Pesan::create($request->all());
        return redirect('kirimpesan')->with('sukses','Pesan Terkirim!.');
    }
}