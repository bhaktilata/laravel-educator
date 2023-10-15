@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Добавить пользователя</h1>
                  </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Новый пользователь</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<div class="container col-md-9">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Создание нового пользователя!!</h3>
                        </div>
                        <!-- /.card-header -->

                <form role="form" action="{{ route('user.store') }}" method="post"  enctype="multipart/form-data">
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

            <div class="form-group ml-3">
              <label for="avatar">Аватар</label>
              <input type="file" name="avatar"  class="form-control @error('avatar') is-invalid @enderror" id="avatar"  placeholder="Изображение" value="{{ old('avatar') }}">
            </div>

            <div class="row">
                <div class="card-footer">
                     <a href="{{ route('user.index') }}"><button type="button" class="btn btn-info">Отмена</button></a>
                     <button type="submit" class="btn btn-primary">Зарегистрировать</button>
                    
             </div>
                    <!-- /.col -->
                </div>
            </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
    <!-- /.content -->
@endsection