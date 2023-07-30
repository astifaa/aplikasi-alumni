@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Edit Profil</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Edit Profil</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Profil</h5>
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @endif
          <form method="POST" action="{{route('update',$user->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{ method_field('put') }}
            <div class="modal-body">
              <div class="mb-3">
                <input type="hidden" name="id" value="{{$user->id}}">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" required name="nama_status" value="{{$user->username}}" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" required name="email" value="{{$user->email}}" class="form-control">
              </div>
              <div class="mb-3">
                <input type="hidden" required name="password" value="{{$user->password}}" class="form-control">
                <input type="hidden" required name="role" value="{{$user->role}}" class="form-control">

              </div>
            </div>
            <div class="modal-footer">
              <a href="{{route('home')}}" class="btn btn-secondary"">Kembali</a>
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