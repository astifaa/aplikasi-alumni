@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data Status</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Data Status</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="col-sm-6" style="float:left"></div>
      <div class="col-sm-6 mb-3" style="float:right; text-align:right;">
        <a href="#tambahData" class="btn btn-primary" data-toggle="modal">
          <i class="bi-plus-square"></i><span> Tambah Data</span></a>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @endif
          <table id="tabelbiasa" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th scope="col" data-sortable="" style="width: 1.65417%;"><a href="#" class="">No</a></th>
                <th scope="col" data-sortable="" style="width: 28.0079%;"><a href="#" class="">Nama Status</a></th>
                <th scope="col" data-sortable="" style="width: 1.3294%;"><a href="#" class="">Aksi</a></th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach($status as $s)
              <tr>
                <td scope="row"><?= $no++ ?></td>
                <td>{{$s->nama_status}}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{route('DaftarStatus.edit',$s->id_status)}}" class="btn btn-outline-success"
                      title="Edit Data"><i class="bi-pencil-square"></i></a>
                    <form action="{{ route('DaftarStatus.destroy',$s->id_status) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <!-- <button type="submit" class="btn btn-outline-danger" title="Hapus Data"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                          class="bi bi-person-dash"></i></button> -->
                    </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Tambah -->
  <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form method="post" action="{{route('DaftarStatus.store')}}">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="btn btn-lg" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              @csrf
              <label for="exampleInputEmail1" class="form-label">Nama Status</label>
              <input type="text" name="nama_status" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
      </div>
      </form>
    </div>
  </div>
  <!-- end modal -->
</section>
@endsection