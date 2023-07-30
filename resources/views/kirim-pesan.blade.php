<?php
 function getDayIndonesia($date)
 {
     if($date != '0000-00-00'){
         $data = hari(date('D', strtotime($date)));
     }else{
         $data = '-';
     }

     return $data;
 }

function hari($day) {
  $hari = $day;

  switch ($hari) {
      case "Sun":
          $hari = "Minggu";
          break;
      case "Mon":
          $hari = "Senin";
          break;
      case "Tue":
          $hari = "Selasa";
          break;
      case "Wed":
          $hari = "Rabu";
          break;
      case "Thu":
          $hari = "Kamis";
          break;
      case "Fri":
          $hari = "Jum'at";
          break;
      case "Sat":
          $hari = "Sabtu";
          break;
  }
  return $hari;
}
$hari_ini   = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kirim Pesan - SI MITI <?php echo date('Y') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <style>
  *,
  *:after,
  *:before {
    box-sizing: border-box;
  }

  body {
    background: #00BFA5;
  }

  .envelope {
    width: 640px;
    height: 420px;
    background: #3E71DA;
    margin: 420px auto 0;
    position: relative;
  }

  .envelope:after,
  .envelope:before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    border-style: solid;
    border-width: 420px 0 0 640px;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #36BBF7;
    z-index: 5;
  }

  .envelope:after {
    border-width: 420px 640px 0 0;
    border-color: rgba(0, 0, 0, 0) #96DDFC rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  }

  .envelope .envelope-cap {
    position: absolute;
    left: 0;
    top: -30px;
    width: 100%;
    height: 30px;
    z-index: 20;
    background: #3760C9;
    transition: 0.2s 0.2s ease-in;
    transform-origin: 50% 100% 0;
    transform: rotateX(180deg);
  }

  .envelope .envelope-cap:after {
    content: "";
    border-style: solid;
    border-width: 0 320px 210px 320px;
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #3760C9 rgba(0, 0, 0, 0);
    position: absolute;
    left: 0;
    bottom: 100%;
  }

  .envelope .latter-form {
    background: #fff;
    padding: 30px;
    width: 600px;
    height: 370px;
    position: absolute;
    left: 20px;
    bottom: 0;
    z-index: 3;
    line-height: 2;
    transition: 0.2s ease-in;
  }

  .envelope .latter-form textarea {
    display: block;
    width: 100%;
  }

  .envelope .latter-form .latter-control {
    border: none;
    outline: none;
    border-bottom: 2px solid #000;
  }

  .envelope .latter-form .latter-btn {
    border: 1px solid #333;
    background: #fff;
    padding: 6px 25px;
    border-radius: 20px;
    font-size: 16px;
    float: right;
    cursor: pointer;
  }

  .envelope .latter-form .latter-btn:hover {
    background: #000;
    color: #fff;
  }

  .envelope:hover .latter-form {
    bottom: 340px;
    transition: 0.2s 0.2s ease-in;
  }

  .envelope:hover .envelope-cap {
    transform: rotateX(0deg);
    transition: 0.2s ease-in;
    z-index: 2;
  }

  /* astronot */
  body {
    margin: 0;
    padding: 0;
    font-family: 'Tomorrow', sans-serif;
    height: 200vh;
    background-image: linear-gradient(to top, #2e1753, #1f1746, #131537, #0d1028, #050819);
    justify-content: center;
    align-items: center;
  }

  .text {
    position: absolute;
    top: 10%;
    color: #fff;
    text-align: center;
  }

  h1 {
    font-size: 50px;
  }

  .star {
    position: absolute;
    width: 2px;
    height: 2px;
    background: #fff;
    right: 0;
    animation: starTwinkle 5s infinite linear;
  }

  .astronaut img {
    width: 100px;
    position: absolute;
    top: 55%;
    animation: astronautFly 6s infinite linear;
  }

  @keyframes astronautFly {
    0% {
      left: -100px;
    }

    25% {
      top: 50%;
      transform: rotate(30deg);
    }

    50% {
      transform: rotate(45deg);
      top: 55%;
    }

    75% {
      top: 60%;
      transform: rotate(30deg);
    }

    100% {
      left: 110%;
      transform: rotate(45deg);
    }
  }

  @keyframes starTwinkle {
    0% {
      background: rgba(255, 255, 255, 0.4);
    }

    25% {
      background: rgba(255, 255, 255, 0.8);
    }

    50% {
      background: rgba(255, 255, 255, 1);
    }

    75% {
      background: rgba(255, 255, 255, 0.8);
    }

    100% {
      background: rgba(255, 255, 255, 0.4);
    }
  }
  </style>

  <script>
  window.console = window.console || function(t) {};
  </script>



</head>
<!-- <div class="text">
  <div>ERROR</div>
  <h1>404</h1>
  <hr>
  <div>Page Not Found</div>
</div> -->

<div class="astronaut">



  <body translate="no">
    <div class="container-fluid">
      <div class="row">
        <div class="col-9">
          <h5 class="mt-3 p-2 text-white">Kirim pesanmu!</h5>
        </div>
        <div class="col-3">
          <a href="Beranda" class="btn btn-dark mt-3 p-2" style="float:right">Kembali</a>
        </div>
      </div>
    </div>

    @if (session('sukses'))
    <div class="alert alert-success">
      {{ session('sukses') }}
    </div>
    @endif
    <div class="envelope">
      <div class="envelope-cap"></div>
      <div class="latter-form">
        <div class="row mb-3">
          <div class="col-6" style="float:right">Assalamu'alaikum</div>
          <div class="col-6" style="float:left; text-align:right"><?= getDayIndonesia($hari_ini),", ",date('d/m/Y') ?>
          </div>
        </div>
        <form method="POST" action="{{route('Pesan')}}">
          @csrf
          <span>Saya</span>
          <input class="latter-control" name="nama" type="text" required />
          <span>Lulusan</span>
          <input class="latter-control" name="lulusan" type="text" required />
          <br /><span>Telp</span>
          <input class="latter-control" name="telp" type="text" required />
          <span>Saya ingin menyampaikan</span>
          <textarea class="latter-control" name="isi_pesan" rows="2"></textarea>
          <p>Terimakasih!</p>
          <button type="submit" class=" latter-btn">Kirim Pesan</button>
        </form>
      </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {

  var body = document.body;
  setInterval(createStar, 100);

  function createStar() {
    var right = Math.random() * 500;
    var top = Math.random() * screen.height;
    var star = document.createElement("div");
    star.classList.add("star")
    body.appendChild(star);
    setInterval(runStar, 10);
    star.style.top = top + "px";

    function runStar() {
      if (right >= screen.width) {
        star.remove();
      }
      right += 3;
      star.style.right = right + "px";
    }
  }
})
</script>
</body>

</html>