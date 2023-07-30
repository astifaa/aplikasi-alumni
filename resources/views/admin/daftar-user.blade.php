@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Data User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="col-sm-6" style="float:left"></div>
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
                <th scope="col" data-sortable="" style="width: 28.0079%;"><a href="#" class="">Username</a></th>
                <th scope="col" data-sortable="" style="width: 28.0079%;"><a href="#" class="">Email</a></th>
                <th scope="col" data-sortable="" style="width: 28.0079%;"><a href="#" class="">Verifikasi</a></th>
                <th scope="col" data-sortable="" style="width: 1.3294%;"><a href="#" class="">Aksi</a></th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; ?>
              @foreach($user as $u)
              <tr>
                <td scope="row"><?= $no++ ?></td>
                <td>{{$u->username}}</td>
                <td>{{$u->email}}</td>
                <td>
                  <?php  
                if($u->active != NULL){
                  echo "<i class='text-success bi bi-check'>Sudah Verifikasi Email</i>";
                } else {
                  echo "-";
                }
                  ?>
                </td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <form action="{{ route('DaftarUser.destroy',$u->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <?php
                      if($u->id == Auth::user()->id AND $u->id == '1'){
                        echo "-";
                      } else if ($u->id == Auth::user()->id){
                        
                        echo "<i class='bi bi-key text-warning' style='font-size:25px;' title='Its You. Dont deleted!'></i>";

                      } else {
                      ?>
                      <button type="submit" class="btn btn-outline-danger" title="Hapus Data"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                          class="bi bi-person-dash"></i></button>
                      <?php }  ?>

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