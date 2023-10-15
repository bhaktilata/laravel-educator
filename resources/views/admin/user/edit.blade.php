@extends('admin.layouts.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Редактировать пользователя</h1>
    </section>

    <!-- Main content -->
    <section class="content">
	      <!-- Default box -->
      <div class="box">
       <form role="form" method="post" action="{{ route('user.update', ['user' => $user->id]) }}" enctype="multipart/form-data">
         @csrf
         @method('PUT')
       
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">

              <label for="name">Имя</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="{{$user->name}}">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{$user->email}}">
            </div>
            <div class="form-group">
              <label for="description">Аннотация</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Аннотация" value="{{$user->description}}">
            </div>
            <div class="form-group">
              <label for="password">Пароль</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            </div>
            <div class="form-group">
              <div class="img-responsive mb-3">
              <img src="/uploads/images/{{$user->getImage()}}" alt="" width="200" class="img-responsive">
            </div>
            <div>
              <label for="avatar">Аватар</label>
              <input type="file" name="avatar" id="avatar">

              <p class="help-block">Какое-нибудь уведомление о форматах..</p>
            </div>
            <div class="form-group">
              <label for="is_admin">Администратор</label>
              <input type="text" class="form-control" id="is_admin" name="is_admin" placeholder="Администратор" value="{{$user->is_admin}}">
            </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{ route('user.index') }}"><button type="button" class="btn btn-info">Отмена</button></a>
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
      </form>  <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection