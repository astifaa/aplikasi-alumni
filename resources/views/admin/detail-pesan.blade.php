@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Detail Pesan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Detail Pesan</li>
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
                <td>{{ $pesan->nama }}</td>
              </tr>
              <tr>
                <th>Lulusan</th>
                <td>{{ $pesan->lulusan }}</td>
              </tr>
              <th>Telphone</th>
              <td>{{ $pesan->telp }}</td>
              </tr>
              <tr>
                <th>Isi Pesan</th>
                <td>{{ $pesan->isi_pesan }}</td>
              </tr>
              <tr>
                <th></th>
                <td>
                  <a class="btn btn-primary" href="{{route('DaftarPesan.index')}}" style="float:right;"><i
                      class="bi-backspace"></i> Kembali</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection