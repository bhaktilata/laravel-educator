@extends('admin.layouts.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  
     <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новый подписчик</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
       <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Создание нового подписчика</h3>
                        </div>
	
        <form role="form" action="{{ route('subscribers.store') }}" method="post" enctype="multipart/form-data">
                @csrf
               <!--div class="card-body">
                
                 <div class="form-group">
                   <label for="name_mailing">Название темы</label>
                    <input type="text" name="name_mailing" class="form-control @error('name_mailing') is-invalid @enderror" placeholder="Тема рассылки" value="{{-- old('name_mailing') --}}">
                    
                </div-->
                    <div class="card-body">  
                    <div class="form-group">
                    <label for="name">Имя подписчика</label>
                    <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Mailing_name" value="{{ old('name') }}">
                    <label for="email">Адрес электронной почты</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}">
                    <label for="status">Статус</label>
                     <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" placeholder="status" value="{{ old('status') }}">
                  </div>         
                </div>


           
                <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Подписать</button>
                </div>
                    <!-- /.col -->
           
             </div>
            </form>
         </div>
     </div>
  </div>
         </div>
</section>
@endsection