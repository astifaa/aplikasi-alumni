@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data Status Alumni</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Edit Data Status</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Data Status</h5>
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @endif
          <form method="POST" action="{{route('DaftarStatus.update',$status->id_status)}}">
            <div class="modal-body">
              <div class="mb-3">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_status" value="{{$status->id_status}}">
                <label for="exampleInputEmail1" class="form-label">Nama Status Alumni</label>
                <input type="text" required name="nama_status" value="{{$status->nama_status}}" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <a href="{{route('DaftarStatus.index')}}" class="btn btn-secondary"">Kembali</a>
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