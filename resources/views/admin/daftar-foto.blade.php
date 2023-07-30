@extends('layouts.template-admin')
@section('content')
<div class="pagetitle">
  <h1>Data Media Foto</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Data Media Foto</li>
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

          <div class="row">
            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="col-12">
                <div class="col-4" style="float:left">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Upload File</label>
                    <input class="form-control" type="file" id="file" name="file" required>
                    @if($errors->has('file'))
                    <small class="error">{{ $errors->first('file') }}</small>
                    @endif
                  </div>
                </div>
                <div class="col-4" style="float:left">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                    <select name="kategori" required class="form-control">
                      <option selected disabled>- Pilih -</option>
                      <option value="kunjin">Kunjin</option>
                      <option value="pkl">PKL</option>
                      <option value="lain-lain">Lain-lain</option>
                    </select>
                  </div>
                </div>
                <div class="col-4" style="float:right; text-align:right; margin-top:9px">
                  <div class="mb-3">
                    <label></label>
                    <button class="save btn btn-primary" style="width:100%">Upload</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <table id="tabelbiasa" width=" 100%" class="table mt-3" cellpadding="0" cellspacing="0">
            <thead>
              <tr>
                <th align="left" width="50%">File</th>
                <th width="25%">File</th>
                <th width="25%">Kategori</th>
                <th width="25%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @if($medias->count())
              @foreach($medias as $media)
              <tr>
                <td>
                  <div>Nama: {{ $media->name }}</div>
                  <div>File: {{ $media->file }}</div>
                  <div>Ekstensi: {{ $media->extension }}</div>
                  <div>Ukuran: {{ $media->size }}</div>
                  <div>Mime: {{ $media->mime }}</div>
                </td>
                <td><img src="{{ url('uploads/' . $media->file) }}" download width="100px" height="100px">
                  <br><a href="{{ url('uploads/' . $media->file) }}" download>Download</a>
                </td>
                <td>{{$media->kategori}}</td>
                <td align="center">
                  <button class="btn btn-danger btn-sm" form="delete-file"
                    onclick="return confirm('Apakah anda yakin ingin menghapus file?')">Hapus</button>
                  <form action="{{ route('media.destroy', $media->id) }}" method="post" id="delete-file">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td align="center" colspan="3">Belum ada file</td>
              </tr>
              @endif
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection