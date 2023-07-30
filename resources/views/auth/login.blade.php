<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login User Aplikasi Alumni - SMK TI Pembangunan <?php echo date('Y') ?></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
  <div class="container">
    <br>
    <div class=" col-md-4 col-md-offset-4">
      <h2 class="text-center">APLIKASI <B>SI MITI</B></h3>
        <hr>
        @if(session('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
        @endif
        <form action="{{route('login')}}" method="post">
          @csrf
          <div class="form-group">
            <label><i class="fa fa-email"></i> Email</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
              placeholder="Masukkan email" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <label><i class="fa fa-key"></i> Password</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
              placeholder="Password" name="password" required>
            @if ($errors->has('password'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Ingat saat masuk') }}
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i> Login</button>
          <hr>
        </form>
        <p class="text-center"><a class="" href="{{ route('password.request') }}">Lupa kata sandi?</a></p>

    </div>
  </div>
</body>

</html>