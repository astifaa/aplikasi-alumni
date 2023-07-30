@extends('layouts.template')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>SI MITI</h1>
    <p><span class="typed"
        data-typed-items="Hallo Alumi SMK TI Pembangunan Cimahi, Selamat Datang!, Apa Kabar?, (S)istem (I)nformasi (A)lumni (S)MK (T.I) Pembangunan Cimahi"></span>
    </p>
    <a href="/FormAlumni" class="mt-3 btn btn-lg btn-primary">Daftar Alumni Sekarang!</a>
    <a href="#" class="mt-3 btn btn-lg btn-success">Formulir PKL</a>
    <div class="social-links">
      <a href="https://www.instagram.com/smktipembangunan" target="blank" class="instagram"><i
          class="bx bxl-instagram"></i></a>
      <a href="https://www.tiktok.com/@smktipembangunan.cimahi" target="blank" class="tiktok"><i
          class="bx bxl-tiktok"></i></a>
    </div>
  </div>
</section>
<!-- End Hero -->

<!-- <section id="resume" class="resume">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><i class="bx bx-popsicle"></i> Pengumuman</h2>
      <p>Penguman dari hubin akan muncul disini!</p>
    </div>

    <div class="row bg-light">
      <p class="text-warning">
        <marquee>Belum Ada pengumuan apapun</marquee>
      </p>
    </div>
  </div>
</section> -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p>Website ini bertujuan untuk memudahkan informasi hubin, berikut layanan yang tersedia :</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5"
                d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
              </path>
            </svg>
            <i class="bx bx-award"></i>
          </div>
          <h4><a href="">Daftar Alumni</a></h4>
          <p>Pendataan alumni ini bertujuan untuk mendata seluruh alumni SMK TI Pembangunan Cimahi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-orange ">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5"
                d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
              </path>
            </svg>
            <i class="bx bx-file"></i>
          </div>
          <h4><a href="">Pemberkasan PKL</a></h4>
          <p>Berkas yang diperlukan ketika akan melaksanakan PKL. <b> "Coming Soon"</b></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-pink">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5"
                d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
              </path>
            </svg>
            <i class="bx bx-briefcase-alt"></i>
          </div>
          <h4><a href="">Hubin Area</a></h4>
          <p>Informasi Seputar Hubungan Industri. Info Loker untuk siswa dll.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Dokumentasi</h2>
      <p>Kumpulan dokumentasi kegiatan yang berkaitan dengan Hubungan Industri.</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".kunjin">Kunjin</li>
          <li data-filter=".pkl">PKL</li>
          <li data-filter=".lain-lain">Kegiatan Lain</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      @foreach($medias as $media)
      <div class="col-lg-4 col-md-6 portfolio-item {{$media->kategori}}">
        <div class="portfolio-wrap">
          <img src="{{ url('uploads/' . $media->file) }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$media->name}}</h4>
            <p>{{$media->name}}</p>
            <div class="portfolio-links">
              <a href="{{ url('uploads/' . $media->file) }}" data-gallery="portfolioGallery" class="portfolio-lightbox"
                title="{{$media->name}}"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      @endforeach
    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pengunjung</h2>
      <p>Berikut adalah data pengunjung web <b>"SIMITI"</b>.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Happy Clients</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Projects</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-award"></i>
          <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Awards</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Facts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Kontak Kami</h2>
    </div>

    <div class="row mt-1">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Lokasi:</h4>
            <p>Kampus 1. Jl. Haji Bakar No. 18 B Hujung Kaler Cimahi
              <br>Kampus 2. Jl. Ciseupan RT05/RW07 Kel. Cibeber Cimahi
            </p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telp :</h4>
            <p>(022) 87774988 . (022) 6671275</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-1 mt-lg-0">
        <center>
          <a href="/kirimpesan"><img src="{{asset('assets/img/email.png')}}" width="30%"></a>

          <div class="text-center">Klik jika ingin mengirim pesan!
          </div>
        </center>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection