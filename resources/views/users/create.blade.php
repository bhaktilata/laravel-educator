<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Артстудия INICONS | Регистрация</title>
 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icheck-bootstrap/icheck-bootstrap.min.css') }}">

</head>

<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h2><b>ART</b>Studio</h2>
    </div>
    <div class="card-body">
        <div class="register-logo">
        <p>Create Регистрация</p>
        </div>
     <div class="card">
        <div class="card-body register-card-body">

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('register.store') }}" method="post">
            @csrf

                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя" value="{{ old('name') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Пароль">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Повторение пароля">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
               Я принимаю <a href="#">правила</a>
              </label>
            </div>
          </div>
                    <div class="col-6 offset-8">
                        <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="register-padding-top">
            <a href="{{ url('/login') }}" class="text-center">Я уже зарегистрирован</a>
        </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div></div>
<!-- /.register-box -->

<script src="{{ asset('assets/admin/js/admin.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/adminlte.min.js.map') }}" type="text/javascript"></script>
</body>
</html>

