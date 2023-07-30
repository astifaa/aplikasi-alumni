<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Data Alumni</title>
  <style>
  body {}

  .table {
    width: 100% font-family: sans-serif;
    color: #232323;
    border: 1px solid #999;
  }

  .tb {

    border-collapse: collapse;
  }

  table {
    border-collapse: collapse;
  }

  th,
  td {
    border: 1px solid black;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="mt-1 mb-1">
      <h3 class="display-2">Rekap Data Alumni</h3>
      <p style="text-align:left">Tanggal : <?php echo date('d/m/Y') ?></p>
      <p style="text-align:left">
        Jurusan : {{ $ju->nama_jurusan }}<br>
        Angkatan : {{$angkatan}} <br>
        Jumlah Alumni : {{ $jmlSiswa }}</p>
    </div>
    <table style="
    border-collapse: collapse;">
      <thead>
        <tr style="">
          <th>No</a></th>
          <th>Nama Lengkap</th>
          <th>Angkatan</th>
          <th>Jurusan</th>
          <th>Email</th>
          <th>Telp</th>
          <th>Domisili</th>
          <th>Status</th>
          <th>Instasi/Univ/Usaha</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>

        @foreach($data as $d)
        <tr>
          <td scope="row"><?= $no++ ?></td>
          <td>{{$d->nama_lengkap}}</td>
          <td>{{$d->angkatan}}</td>
          <td>{{$d->nama_jurusan}}</td>
          <td>{{$d->email}}</td>
          <td>{{$d->telp}}</td>
          <td>{{$d->domisili}}</td>
          <td>{{$d->nama_status}}</td>
          <td>{{$d->lokasi}}</td>
          <td>{{$d->alamat}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>

</body>

</html>