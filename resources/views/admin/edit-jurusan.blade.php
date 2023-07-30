@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data Jurusan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Edit Data Jurusan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Data Jurusan</h5>
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @endif
          <form method="POST" action="{{route('DaftarJurusan.update',$jurusan->id_jurusan)}}">
            <div class="modal-body">
              <div class="mb-3">
                @csrf
                @method('PUT')
                <input type="hidden" id="id_jurusan" name="id_jurusan" value="{{$jurusan->id_jurusan}}">
                <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
                <input type="text" required name="nama_jurusan" value="{{$jurusan->nama_jurusan}}" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <a href="{{route('DaftarJurusan.index')}}" class="btn btn-secondary"">Kembali</a>
              <button type=" submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection