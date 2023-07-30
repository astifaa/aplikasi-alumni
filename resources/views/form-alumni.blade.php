@extends('layouts.template')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Form Data Alumni</h2>
    </div>
    @if (session('sukses'))
    <div class="alert alert-success">
      {{ session('sukses') }}
    </div>
    @endif
    <div class="row mt-1">
      <div class="col-lg-12 mt-5 mt-lg-0">
        <form action="{{route('FormAlumni.store')}}" method="post">
          <div class="mb-3">
            <div class="row">
              @csrf
              <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required
                  placeholder="Nama Lengkap">
              </div>
              <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">Nama Panggilan</label>
                <input type="text" class="form-control" name="nama_panggilan" value="{{ old('nama_panggilan') }}"
                  required placeholder="Nama Panggilan">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">E-mail (Aktif) </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                  value="{{ old('email') }}" name="email" required placeholder="email">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">No Telp/Whatsapp</label>
                <input type="number" class="form-control" name="telp" value="{{ old('telp') }}" required
                  placeholder="No Telp/Whatsapp">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-4">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" required value="{{ old('jenis_kelamin') }}">
                  <option class="form-control" selected disabled>- Pilih -</option>
                  <option class="form-control" value="L">Laki-laki</option>
                  <option class="form-control" value="P">Perempuan</option>
                </select>
              </div>
              <div class="col-4">
                <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                <select class="form-select" name="id_jurusan" required value="{{ old('id_jurusan') }}">
                  <option class="form-control" selected disabled>- Pilih -</option>
                  @foreach ($jurusan as $j)
                  <option class="form-control" name="id_jurusan" value="{{$j->id_jurusan}}">{{$j->nama_jurusan}}
                  </option>
                  @endforeach

                </select>
              </div>
              <div class="col-4">
                <label for="exampleFormControlInput1" class="form-label">Angkatan</label>
                <select class="form-select" name="angkatan" required value="{{ old('angkatan') }}">
                  <option class="form-control" selected disabled>- Pilih -</option>
                  <?php 
                 $now=date('Y'); 
                 for($tahun=2000;$tahun<=$now;$tahun++){
                  ?>
                  <option class="form-control" name="angkatan" required>{{$tahun}}</option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col-4">
                <label for="exampleFormControlInput1" class="form-label">Status Saat Ini</label>
                <select class="form-select" name="id_status" required value="{{ old('id_status') }}">
                  <option class="form-control" selected disabled>- Pilih -</option>
                  @foreach ($status as $s)
                  <option class="form-control" name="id_status" value="{{$s->id_status}}">{{$s->nama_status}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-4">
                <label for="exampleFormControlInput1" class="form-label">Nama Instansi/Perguruan/Usaha</label>
                <input type="text" class="form-control" name="lokasi" value="{{ old('lokasi') }}" required
                  placeholder="Nama Instansi/Perguruan Tinggi/Usaha">
              </div>
              <div class="col-4">
                <label for="exampleFormControlInput1" class="form-label">Tahun Masuk/Bekerja/Usaha</label>
                <select class="form-select" name="tahun_bekerja" required value="{{ old('tahun_bekerja') }}">
                  <option class="form-control" selected disabled>- Pilih -</option>
                  <?php 
                 $now=date('Y'); 
                 for($tahun=2000;$tahun<=$now;$tahun++){
                  ?>
                  <option class="form-control" name="tahun_bekerja">{{$tahun}}</option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="mb-3">

            <div class="alert alert-warning" role="alert">
              <small>
                Tata Cara mengisi <b>Status saat ini</b> :
                <ol>
                  <li><b>Melanjutkan Kuliah</b></li>
                  <ul>
                    <li>Tulis <b>Nama Tempat Kuliah</b> contoh : <b>Universitas XYZ (Jurusan Informatika)</b></li>
                    <li>Pilih <b>Tahun Masuk Kuliah</b></li>
                  </ul>
                  <li><b>Sudah Bekerja</b></li>
                  <ul>
                    <li>Tulis <b>Nama Instansi</b> contoh : <b>PT XYZ (Bagian Teknisi)</b></li>
                    <li>Pilih <b>Tahun Mulai Bekeraj</b></li>
                  </ul>
                  <li><b>Berwirausaha</b></li>
                  <ul>
                    <li>Tulis <b>Nama Usaha</b> contoh : <b>XYZ Shop (Owner/Supplier)</b></li>
                    <li>Pilih <b>Tahun Mulai Usaha</b></li>
                  </ul>
                </ol>
              </small>

            </div>
            <label for="exampleFormControlInput1" class="form-label">Domisili</label>
            <select class="form-select" name="domisili" required value="{{ old('domisili') }}">
              <option class="form-control" selected disabled>- Pilih -</option>
              <option class="form-control" value="dalam">Dalam Kota</option>
              <option class="form-control" value="luar">Luar Kota</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat Saat ini</label>
            <textarea class="form-control" name="alamat" required placeholder="Tulis alamat Lengkap"
              rows="3">{{ old('alamat') }}</textarea>
          </div>
          <div class="text-center">
            <a href="/" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Kirim Formulir</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
<style>

</style>
@endsection