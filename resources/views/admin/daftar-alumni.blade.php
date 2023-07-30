@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data Alumni</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Data Alumni</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Datatables</h5>
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @endif
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th scope="col" data-sortable="" style="width: 5.65417%;"><a href="#" class="">No</a></th>
                <th scope="col" data-sortable="" style="width: 28.0079%;"><a href="#" class="">Nama Lengkap</a></th>
                <th scope="col" data-sortable="" style="width: 35.7000%;"><a href="#" class="">Status</a></th>
                <th scope="col" data-sortable="" style="width: 20.3294%;"><a href="#" class="">Lulusan</a></th>
                <th scope="col" data-sortable="" style="width: 19.3294%;"><a href="#" class="">Aksi</a></th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach($alumni as $a)
              <tr>
                <td scope="row"><?= $no++ ?></td>
                <td>{{$a->nama_lengkap}}</td>
                <td>{{$a->nama_status}}</td>
                <td>{{$a->angkatan}}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="{{ route('DaftarAlumni.show',$a->id_alumni) }}" class="btn btn-outline-success"
                      title="Lihat detail alumni"><i class="bi bi-eye-fill"></i></a>
                    <form action="{{ route('DaftarAlumni.destroy',$a->id_alumni) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger" title="Hapus alumni"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                          class="bi bi-person-dash"></i></button>
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
</section>
@endsection