@extends('front.layouts.layout')
@section('title', 'Институт сознания INICONS :: Портфолио')
@section('content')
  <!--breadcrumb--> 
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Профиль пользователя </h2>
            <p class="inner-page-para mt-2">
              Learn Anytime, Anywhere.
              Accelerate Your Future.</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Профиль {{ $user->name }} </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb--> 
        <div class="container">
            <div class="container-fluid">
                <div class="row mb-2 mt-5">
                    <div class="col-sm-6">
                        <h1>{{ $user->name }}</h1>
                         <!--Erorrs-->   
                          <!--Обновлените статуса профиля-->
                        @if(session('status')) 
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!--//Erorrs--> 
                    </div>
                </div>
             
            </div>
        </div>
   
<div class="container col-md-9">
    <!-- Main content -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                           <h3 class="card-title">Редактирование профиля</h3>
                        </div>
                        <!-- /.card-header -->
                    
               <form class="form-horizontal contact-form" role="form" method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя" value="{{ $user->name }}">
                    <div class="input-group-append">
                       
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $user->email }}">
                    <div class="input-group-append">
                        
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Пароль">
                    <div class="input-group-append">
                       
                    </div>
                </div>

            <div class="form-group mt-3">
              @if($user->avatar)  
                  <div><img src="/public/uploads/images/{{ $user->getImage() }}" class="img-thumbnail mt-2" width="200"></div>
              @else
                  <div><img src="{{ asset('public/img/no-image.png')}}" class="img-thumbnail mt-2" width="200"></div>
              @endif
              <label for="avatar">Аватар</label>
              <input type="file" name="avatar"  class="form-control @error('avatar') is-invalid @enderror mt-2" id="image"  placeholder="Изображение" value="{{ old('avatar') }}">
            </div>

            <div class="row">
                <div class="card-footer">
                    
                     <button type="submit" class="btn btn-style btn-primary mt-3 mb-5">Изменить</button>
                    
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
       <!-- /.container-fluid -->
 

</div>

    <!-- /.content -->



@endsection

