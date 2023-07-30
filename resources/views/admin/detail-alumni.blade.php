@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Detail Data Alumni</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Detail Data Alumni</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body mt-3">
          <div class="dataTable-container">
            <table class="table text-capitalize">
              <tr>
                <th>Nama Lengkap </th>
                <td>{{ $alumni->nama_lengkap }}</td>
              </tr>
              <tr>
                <th>Nama Panggilan</th>
                <td>{{ $alumni->nama_panggilan }}</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>{{ $alumni->email }}</td>
              </tr>
              <tr>
                <th>Telphone</th>
                <td>{{ $alumni->telp }}</td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $alumni->jenis_kelamin }}</td>
              </tr>
              <tr>
                <th>Jurusan</th>
                <td>{{ $alumni->nama_jurusan }}</td>
              </tr>
              <tr>
                <th>Tahun Lulus</th>
                <td>{{ $alumni->nama_panggilan }}</td>
              </tr>
              <tr>
                <th>Status Saat ini</th>
                <td>{{ $alumni->nama_status }}</td>
              </tr>
              <tr>
                <th>Nama Perusahaan/Universitas/Nama Usaha</th>
                <td>{{ $alumni->nama_panggilan }}</td>
              </tr>
              <tr>
                <th>Tahun Bekerja</th>
                <td>{{ $alumni->tahun_bekerja }}</td>
              </tr>
              <tr>
                <th>Domisili</th>
                <td>{{ $alumni->domisili }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>{{ $alumni->alamat }}</td>
              </tr>
              <tr>
                <th></th>
                <td>
                  <a class="btn btn-primary" href="{{route('DaftarAlumni.index')}}" style="float:right;"><i
                      class="bi-backspace"></i> Kembali</a>
                  <a target="blank" class="btn btn-success" href="{{route('hubungiWa',$alumni->id_alumni)}}"
                    style="float:right; margin-right:5px"><i class="bi-whatsapp"></i> Hubungi</a>
                  <!-- <a class="btn btn-danger" href="{{route('DaftarAlumni.index')}}"
                    style="float:right; margin-right:5px"><i class="bi-envelope"></i> Email</a> -->
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection