<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Jurusan;
use App\Models\Status;
use App\Exports\AlumniExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use PDF;

class AdminController extends Controller
{
    //Halaman Admin 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alumni = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')->get();
        return view('admin/daftar-alumni', compact('alumni'));
    }

    public function show($id_alumni){
        $alumni = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')->join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')->find($id_alumni);
        return view('admin/detail-alumni', compact('alumni'));
    }

    public function destroy($id_alumni)
    {
        $alumni = Alumni::find($id_alumni);
        $alumni->delete();
        return redirect('DaftarAlumni')->with('sukses','Data Berhasil di Hapus.');
    }
    public function wa($id_alumni){
        $alumni = ALumni::find($id_alumni);
        $tlp = $alumni->telp;
        $url = ltrim($tlp, "0");
        $alumni = $alumni->nama_lengkap;
        $nama = Auth::user()->username;
        $pesan = "Assalamu'alaikum, Hallo Akang/Teteh "."*".$alumni."*"." Saya  "."*".$nama."*"." dari"." *Hubin SMK TI Pembangunan Cimahi*";
        return redirect()->away('https://api.whatsapp.com/send?phone='.$url.'&text='.$pesan);
    }

    public function laporan(){
        
        $jurusan = Jurusan::get();
        $data = Alumni::where('id_alumni','CANDY');
        return view('admin/daftar-laporan',compact('jurusan','data'));
    }

    public function cari(Request $request){
        // $jurusan = Jurusan::get();
        // return view('admin/daftar-laporan',compact('jurusan'));
        if(isset($_POST['btn-pdf'])){
            
        $j = $request->id_jurusan;
        $angkatan = $request->angkatan;
        $jurusan = Jurusan::get();
        $jur = Jurusan::select('nama_jurusan')->where('id_jurusan',$j)->get();
        foreach ($jur as $ju){
        }
        
        $data = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('alumnis.id_jurusan','=',$j)
        ->where('alumnis.angkatan','=',$angkatan)->get();
        $jmlRPL = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','RPL')
        ->count();
        $jmlTKJ = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','TKJ')
        ->count();
        $jmlTEI = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','TEI')
        ->count();
        $jmlTPTU = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','TPTU')
        ->count();

        $jmlKuliah = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('status_alumni.nama_status','Melanjutkan Kuliah')
        ->count();
        $jmlKerja = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('status_alumni.nama_status','Sudah Bekerja')
        ->count();
        $jmlUsaha = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('status_alumni.nama_status','Berwirausaha')
        ->count();

        $jmlSiswa = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('alumnis.id_jurusan','=',$j)
        ->where('alumnis.angkatan','=',$angkatan)->count();
        
        $pdf = PDF::loadview('admin.cetak-alumni-filter', ['data' => $data,
        'jmlSiswa' => $jmlSiswa,
        'jmlRPL'=>$jmlRPL,
        'jmlTEI'=>$jmlTEI,
        'jmlTKJ'=>$jmlTKJ,
        'jmlTPTU'=>$jmlTPTU,
        'jmlUsaha' =>$jmlUsaha,
        'jmlKuliah' => $jmlKuliah,
        'jmlKerja' => $jmlKerja,
        'ju' => $ju,
        'angkatan' => $angkatan,

        ])->setPaper('a4', 'landscape');;
        return $pdf->download('data-alumni-'. time().'.pdf');
        return view('admin/daftar-laporan',compact('data','jurusan'));
        } else {
            echo" baa";
        }

    }

    public function cetak(Request $request){

            
        $j = $request->id_jurusan;
        $angkatan = $request->angkatan;
        $jurusan = Jurusan::get();
       
        $jmlRPL = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','RPL')
        ->count();
        $jmlTKJ = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','TKJ')
        ->count();
        $jmlTEI = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','TEI')
        ->count();
        $jmlTPTU = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->where('jurusan.nama_jurusan','TPTU')
        ->count();

        $jmlKuliah = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('status_alumni.nama_status','Melanjutkan Kuliah')
        ->count();
        $jmlKerja = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('status_alumni.nama_status','Sudah Bekerja')
        ->count();
        $jmlUsaha = Alumni::join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->where('status_alumni.nama_status','Berwirausaha')
        ->count();

        $data = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->get();
        $jmlSiswa = Alumni::join('jurusan','jurusan.id_jurusan','alumnis.id_jurusan')
        ->join('status_alumni','status_alumni.id_status','alumnis.id_status')
        ->count();
        
        $pdf = PDF::loadview('admin.cetak-alumni', ['data' => $data,
        'jmlSiswa'=>$jmlSiswa, 
        'jmlRPL'=>$jmlRPL,
        'jmlTEI'=>$jmlTEI,
        'jmlTKJ'=>$jmlTKJ,
        'jmlTPTU'=>$jmlTPTU,
        'jmlUsaha' =>$jmlUsaha,
        'jmlKuliah' => $jmlKuliah,
        'jmlKerja' => $jmlKerja,
    ])->setPaper('a4', 'landscape');
        return $pdf->download('data-alumni-'. time().'.pdf');
        // return view('admin/daftar-laporan',compact('data','jurusan'));

    }

    public function cExcel(Request $request)
    {
        return Excel::download(new AlumniExport, 'data-alumni-'. time().'.xlsx'); 
    }
        
    
}