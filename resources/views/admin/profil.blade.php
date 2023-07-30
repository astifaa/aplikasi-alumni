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
        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Akun <span>/ Selamat Datang Admin!</span></h5>

              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                  </tr>
                </thead>
                @foreach($data as $d)
                <tbody>
                  <tr>
                    <td>{{$d->username}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->password}}</td>
                    <td>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>

              <!-- Line Chart -->
              <div id=" reportsChart">
              </div>


            </div>

          </div>
        </div>
        <!-- End Reports -->


      </div>
</section>
@endsection