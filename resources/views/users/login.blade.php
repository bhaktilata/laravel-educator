<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Высшая школа йоги INICONS | Страница входа</title>
 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/admin/css/custom.css">
    <link rel="stylesheet" href="public/assets/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/admin/css/admin.css">
</head>

<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h2><b>ART</b>Studio</h2>
    </div>
    <div class="card-body">
        <div class="register-logo">
        <p>Вход в систему</p>
        </div>
     <div class="card">
        <div class="card-body register-card-body">
       <!--Отображение ошибок и сообщений--> 
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
         <!--Отображение ошибок-->
    <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-4 offset-8">
                        <button type="submit" class="btn btn-primary btn-block">Войти</button><br>
                        <a href="{{ url('/') }}" class="text-center">На главную</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
         </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div></div>
<!-- /.register-box -->

<script src="public/assets/admin/js/admin.js" type="text/javascript"></script>

</body>
</html>

        
     


