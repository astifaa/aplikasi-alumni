@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data Laporan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Data Laporan</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">

    <div class="col-12">
      <div class="col-sm-6" style="float:left"></div>
      <div class="col-sm-6 mb-3" style="float:right; text-align:right;">
        <a href="{{route('cetakData')}}" target="blank" class="btn btn-primary">
          <i class="bi-printer"></i><span> Cetak Seluruh Data</span></a>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Filter Cetak data</h5>
          @if (session('sukses'))
          <div class="alert alert-success">
            {{ session('sukses') }}
          </div>
          @endif
          <div class="col-12" style="margin-bottom:100px">

            <form method="post" action="{{route('cariData')}}">
              <div class="col-4" style="float:right;">
                <button type="submit" name="btn-pdf" style=" margin-left:10px;" class="btn btn-danger ml-3">PDF</button>
                <!-- <button type="submit" name="btn-excel" class="btn btn-success">Excel</button> -->
                <a href="{{route('Laporan')}}" class="btn btn-warning">Refresh</a>
              </div>
              @csrf
              <div class="col-4 mr-3" style="float:right">
                <select class="form-select" name="angkatan" required value="{{ old('angkatan') }}">
                  <option class="form-control" selected disabled>- Pilih Angkatan -</option>
                  <?php 
                 $now=date('Y'); 
                 for($tahun=2000;$tahun<=$now;$tahun++){
                  ?>
                  <option class="form-control" name="angkatan" required>
                    {{$tahun}}</option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-4" style="float:right">
                <select class="form-select" name="id_jurusan" required value="{{ old('id_jurusan') }}">
                  <option class="form-control" selected disabled>- Pilih Jurusan -</option>
                  @foreach ($jurusan as $j)
                  <option class="form-control" name="id_jurusan" value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}
                  </option>
                  @endforeach
                </select>
              </div>
          </div>
          </form>


          <div class="row">

            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection