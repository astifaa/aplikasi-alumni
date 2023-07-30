<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aplikasi Alumni - SMK TI Pembangunan <?php echo date('Y') ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets-admin/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets-admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets-admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-admin/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets-admin/img/logo.png" alt="">
        <span class="d-none d-lg-block">SIMITI</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">

            <span class="d-none d-md-block dropdown-toggle" style="font-size:18px;"><i class="bi bi-person"></i>
              {{ Auth::user()->username}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>{{ Auth::user()->email}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('recandyster')}}">
                <i class="bi bi-key text-info"></i>
                <span class="text-info">Tambah Admin</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('profil')}}">
                <i class="bi bi-person"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/DaftarUser">
          <i class="bi bi-lock"></i><span>Data User</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Master</span><i
            class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/DaftarJurusan">
              <i class="bi bi-circle"></i><span>Data Jurusan</span>
            </a>
          </li>
          <li>
            <a href="/DaftarStatus">
              <i class="bi bi-circle"></i><span>Data Status Alumni</span>
            </a>
          </li>
          <li>
            <a href="/media">
              <i class="bi bi-circle"></i><span>Data Foto Kegiatan</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/DaftarAlumni">
          <i class="bi bi-book"></i><span>Data Alumni</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/Laporan">
          <i class="bi bi-printer"></i><span>Cetak Laporan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/DaftarPesan">
          <i class="bi bi-envelope"></i><span>Pesan Masuk</span>
        </a>
      </li>
      <!-- End Tables Nav -->


    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-admin/js/main.js')}}"></script>

  <!-- data tabel -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js'></script>
  <script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js'></script>

  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'>

  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      responsive: true,
      select: true,

    });
  });
  $(document).ready(function() {
    $('#tabelbiasa').DataTable({
      select: true,
      responsive: true,

    });
  });
  $('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  })
  </script>
</body>

</html>