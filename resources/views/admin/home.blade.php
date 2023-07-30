@extends('layouts.template-admin')

@section('content')
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-3">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Admin <span>| Aplikasi SIMITI</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-key"></i>
                </div>
                <div class="ps-3">
                  <a href="DaftarUser">
                    <h6>{{$jmlUser}}</h6>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Sales Card -->


        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-3">
          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title">Daftar <span>| Pesan</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="ps-3">

                  <a href="DaftarPesan">
                    <h6>{{$jmlPesan}}</h6>
                  </a>
                </div>

              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->


        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Alumni <span>| Jumlah alumni terdaftar</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <a href="DaftarAlumni">
                    <h6>{{$jmlAlumni}}</h6>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Reports <span>/ Data Alumni di setiap tahun</span></h5>
              <form method="post" action="{{route('cari')}}">
                <div class="col-4" style="float:right;">
                  <button type="submit" name="btn-pdf" style=" margin-left:10px;"
                    class="btn btn-primary ml-3">Cari</button>
                  <!-- <button type="submit" name="btn-excel" class="btn btn-success">Excel</button> -->
                  <a href="{{route('home')}}" class="btn btn-warning">Refresh</a>
                  <?php
                  
                  if($jmlSiswa == "0"){

                  } else {
                    echo "<h4 style='text-align:right'>$jmlSiswa Alumni</h4>";
                  }
                  ?>

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
            <div class="row p-3">
              <table class="table" id="example">
                <?php $no=1; ?>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jumlah</th>
                    <th>Tahun Lulus</th>
                    <th>Jurusan</th>
                  </tr>
                </thead>
                @foreach($alumni as $d)
                <tbody>
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$d->nama_lengkap}}</td>
                    <td>{{$d->angkatan}}</td>
                    <td>{{$d->nama_jurusan}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- Line Chart -->
            <div id=" reportsChart">
            </div>
            <!-- End Line Chart -->

          </div>

        </div>
      </div><!-- End Reports -->


    </div>
</section>
@endsection